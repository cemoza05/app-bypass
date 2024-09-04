import requests
import random
import time
from colorama import Fore, Style, init

# Inisialisasi colorama
init(autoreset=True)

# Fungsi untuk memuat proxy dari input pengguna
def load_proxies(proxy_list, username, password, port):
    proxies = []
    for proxy_address in proxy_list.strip().split('\n'):
        proxy_address = proxy_address.strip()
        if proxy_address:  # Pastikan tidak ada baris kosong yang masuk ke daftar proxy
            # Tambahkan port ke alamat proxy jika tidak ada port di dalamnya
            if ':' not in proxy_address:
                proxy_address = f'{proxy_address}:{port}'
            proxy = {'http': f'http://{username}:{password}@{proxy_address}'}
            proxies.append(proxy)
    return proxies

# Fungsi untuk membaca input multiline dari pengguna
def read_multiline_input(prompt):
    print(prompt)
    lines = []
    while True:
        try:
            line = input()
            if line:
                lines.append(line)
            else:
                break
        except EOFError:
            break
    return '\n'.join(lines)

# Minta pengguna untuk menyalin dan menempelkan daftar proxy
proxy_list = read_multiline_input("Masukkan daftar proxy (satu per baris): ")

# Minta username dan password untuk proxy
username = input("Masukkan username untuk proxy: ")
password = input("Masukkan password untuk proxy: ")

# Minta input port untuk proxy
port = input("Masukkan port untuk proxy: ")

# Muat daftar proxy dari input pengguna
proxies = load_proxies(proxy_list, username, password, port)

# Minta input domain dari pengguna
url = input("Masukkan URL yang ingin dituju (termasuk 'http://' atau 'https://'): ")

# Minta input jumlah request yang ingin dikirim
num_requests = int(input("Masukkan jumlah request yang ingin dikirim: "))

# Minta input untuk jeda waktu minimal dan maksimal (dalam detik)
min_sleep = float(input("Masukkan jeda waktu minimal antara request (dalam detik): "))
max_sleep = float(input("Masukkan jeda waktu maksimal antara request (dalam detik): "))

for i in range(num_requests):
    proxy = random.choice(proxies)  # Pilih proxy secara acak
    try:
        response = requests.get(url, proxies=proxy)
        print(f"{Fore.GREEN}Request {i+1}: Status Code {response.status_code} via {proxy['http']}")
    except requests.exceptions.RequestException as e:
        print(f"{Fore.RED}Request {i+1} failed: {e}")
    time.sleep(random.uniform(min_sleep, max_sleep))  # Jeda acak antara min_sleep hingga max_sleep detik
