#Author WibuCode
import requests, os, sys
os.system("clear")
api = "https://api.hackertarget.com/reverseiplookup/?q="
ip = raw_input("Ip: ")
r = requests.get(api+ip)
print r.content
