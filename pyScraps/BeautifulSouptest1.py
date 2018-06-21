from bs4 import BeautifulSoup

import requests

url = input("Enter a website to extract the URL's from: ")
linklist = []


def findLinks(url):


	linklist.append("https://" + url)
	r = requests.get("https://" + url)

	data = r.text

	soup = BeautifulSoup(data)

	for link in soup.find_all('a'):
		#print(link.get('href'))
		tmp = url + link.get('href')
		if tmp in linklist:
			return 0
		elif tmp not in linklist:
			if link.get('href') != '#main' and "https://www.911memorial.org/page-not-found" not in data:
				print(url + link.get('href'))
				return findLinks(tmp)




x = findLinks(url)
for i in linklist:
	print(i)
