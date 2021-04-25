import json
from urllib import request

# tentukan url endpoint
url = "https://indonesia-covid-19.mathdro.id/api/provinsi"

# lakukan http request ke server
response = request.urlopen(url)

# parsing data json
data = json.loads(response.read())

# cetak hasil parsing data
print(data)

# gunakan perulangan untuk menampilkan data
# for covid in data['data']:
#     print(f"- {covid['provinsi']}:")
#     print(f"  Positif: {covid['kasusPosi']}")
#     print(f"  Sembuh: {covid['kasusSemb']}")
#     print(f"  Meninggal: {covid['kasusMeni']}")