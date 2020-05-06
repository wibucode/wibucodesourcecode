import json
import os, sys, shutil
import base64
import requests
nama_file = raw_input("Nama File: ")
with open(nama_file, "rb") as file:
	url = "https://api.imgbb.com/1/upload"
    	payload = {
       		 "key": "58d46e23a3edecf448226741dc15224c",
       		 "image": base64.b64encode(file.read()),
   	 }
    	res = requests.post(url, payload)
	data = res.json()
    	print "\033[91mLink gambar =>: "+"\033[96m", data['data']['url']
