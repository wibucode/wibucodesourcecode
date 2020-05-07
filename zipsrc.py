import zipfile, os, sys
os.system("clear")
zip = raw_input("Nama File: ")
password = raw_input("Password: ")
zfile = zipfile.ZipFile(zip)
password = password.strip("\n").strip("\r")
try:
         zfile.extractall(pwd=password)
         print ("Password benar > "+password)
         sys.exit()
except Exception, e:
         print ("Password salah > "+password)
