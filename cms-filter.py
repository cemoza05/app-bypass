#!/usr/bin/env python3
import requests
import os
from colorama import init, Fore, Style
from concurrent.futures import ThreadPoolExecutor

os.system("title " + "CMS Scanner - https://t.me/spammersfamily ")

try:
    os.mkdir('CMS')
except:
    print

s = requests.Session()

uagent = {'User-Agent':'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/37.0.2062.94 Chrome/37.0.2062.94 Safari/537.36'} #useragent

os.system('cls' if os.name == 'nt' else 'clear') #clearterminal

init()
merah = Fore.RED  # color red
hijau = Fore.GREEN  # color green
cyan = Fore.CYAN  # color cyan
kuning = Fore.YELLOW  # color yellow
blue = Fore.BLUE  # color blue
magenta = Fore.MAGENTA  # color magenta
putih = Fore.WHITE  # color white
reset = Fore.RESET  # reset color

def cms(domain):
    remove = domain.replace("http://", "").replace("https://", "")
    all = s.get('http://' + remove, headers=uagent)
    dp = s.get('http://' + remove + '/user', headers=uagent)
    joomla = s.get('http://' + remove + '/administrator', headers=uagent)
    wp = s.get('http://' + remove + '/wp-login.php', headers=uagent)
    moodle = s.get('http://' + remove + '/login/index.php', headers=uagent)

    if 'Drupal' in dp.text:
        print(f'[{cyan}+{reset}] http://' + remove + f' [ {hijau} Drupal {reset} ]')
        with open('CMS/drupal.txt', 'a+') as f:
            f.write('http://' + remove + "\n")
    elif 'login-joomla' in joomla.text:
        print(f'[{cyan}+{reset}] http://' + remove + f' [ {cyan} Joomla {reset} ]')
        with open('CMS/joomla.txt', 'a+') as f:
            f.write('http://' + remove + "\n")
    elif 'Username or Email Address' in wp.text or 'Log In' in wp.text:
        print(f'[{cyan}+{reset}] http://' + remove + f' [ {blue} WordPress {reset} ]')
        with open('CMS/wordpress.txt', 'a+') as f:
            f.write('http://' + remove + "\n")
    elif 'Moodle' in moodle.text:
        print(f'[{cyan}+{reset}] http://' + remove + f' [ {kuning} Moodle {reset} ]')
        with open('CMS/moodle.txt', 'a+') as f:
            f.write('http://' + remove + "\n")
    else:
        print(f'[{cyan}+{reset}] http://' + remove + f' [ {merah} Unknown {reset} ]')
        with open('CMS/unknown.txt', 'a+') as f:
            f.write('http://' + remove + "\n")

banner = f"""
{Style.BRIGHT}{Fore.YELLOW}===========================================================
                   {Fore.CYAN}CMS Scanner Tool
{Fore.YELLOW}==========================================================={Fore.CYAN}
|                                                         |
|  {Fore.CYAN}[ {Fore.GREEN}WordPress {Fore.CYAN}]                                          |
|  {Fore.CYAN}[ {Fore.MAGENTA}Joomla {Fore.CYAN}]                                             |
|  {Fore.CYAN}[ {Fore.BLUE}Drupal {Fore.CYAN}]                                             |
|  {Fore.CYAN}[ {Fore.YELLOW}Moodle {Fore.CYAN}]                                             |
|  {Fore.CYAN}[ {Fore.RED}Unknown {Fore.CYAN}]                                            |
|                                                         |
{Fore.YELLOW}===========================================================
"""

if __name__ == '__main__':
    try:
        print(banner)
        site = input('[?] Domain List > ') #domainlist
        thrd = input('[?] Thread > ') #thread
        perline = open(site,'r').read().splitlines()
        print('')
        with ThreadPoolExecutor(max_workers=int(thrd)) as e:
            [e.submit(cms, i) for i in perline]
    except KeyboardInterrupt:
        print(f'\n\n{merah}[!] {reset}CTRL + C DETECT {merah}[!]') #forkeyboardinterrupt
    except:
        print(f'{merah}[!] {reset}INCORRECT {merah}[!]')