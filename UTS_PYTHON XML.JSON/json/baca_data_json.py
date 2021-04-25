# gunakan modul json
import json

# buka file JSON
file_json = open("dataku.json")

# parsing data JSON
data = json.loads(file_json.read())

# cetak isi data JSON
print(f"Name: {data['name']}")
print(f"Address: {data['address']}")
print("Sosial Media:")
print(f"- Instagram: {data['social_media']['instagram']}")