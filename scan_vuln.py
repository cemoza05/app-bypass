import nmap

def scan_vuln(domain):
    # Membuat objek scanner
    scanner = nmap.PortScanner()
    
    print(f"Scanning vulnerability untuk {domain}...")
    
    # Menjalankan scan untuk memeriksa vulnerability
    scanner.scan(domain, arguments="--script vuln")

    # Menampilkan hasil scan
    for host in scanner.all_hosts():
        print(f"\nHasil scan untuk host: {host}")
        print(f"Status Host: {scanner[host].state()}")
        if 'tcp' in scanner[host]:
            for port in scanner[host]['tcp']:
                print(f"Port {port}: {scanner[host]['tcp'][port]['state']}")
                if 'script' in scanner[host]['tcp'][port]:
                    print(f"Vuln Script Output: {scanner[host]['tcp'][port]['script']}")

def read_urls_from_file(file_name):
    try:
        with open(file_name, 'r') as file:
            urls = file.readlines()
            return [url.strip() for url in urls]  # Menghapus spasi dan newline
    except FileNotFoundError:
        print(f"File {file_name} tidak ditemukan.")
        return []

if __name__ == "__main__":
    file_name = input("Masukkan nama file .txt yang berisi list URL: ")
    urls = read_urls_from_file(file_name)
    
    if urls:
        for domain in urls:
            scan_vuln(domain)
    else:
        print("Tidak ada URL yang valid ditemukan di file.")
