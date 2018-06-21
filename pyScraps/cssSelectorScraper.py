from bs4 import BeautifulSoup

import requests

url = input("Enter a website to extract the IDs from: ")

def findIds(url):
	r = requests.get("https://" + url)
	data = r.text
	soup = BeautifulSoup(data)

	#print(soup)
	formid = soup.select("input > id")
	forid = "fdsafdsafdsafdsafdsa"
	#soup.find_all(input, id = True)
	print(formid)


x = findIds(url)