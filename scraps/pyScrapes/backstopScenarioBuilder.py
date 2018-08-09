import sys

def scenarioParse(url):
	sPiece.append("{")

	sPiece.append('"label": "' + urlLink(url.strip('\n')) +'",')
	sPiece.append('"cookiePath": "backstop_data/engine_scripts/cookies.json",')
	tmpstr = url.strip('\n') + '",'
	sPiece.append('"url": "' + tmpstr)
	sPiece.append('"referenceUrl": "",')
	sPiece.append('"readyEvent": "",')
	sPiece.append('"readySelector": "",')
	sPiece.append('"delay": 0,')
	sPiece.append('"hideSelectors": [],')
	sPiece.append('"removeSelectors": [],')
	sPiece.append('"hoverSelector": "",')
	sPiece.append('"clickSelector": "",')
	sPiece.append('"postInteractionWait": 0,')
	sPiece.append('"selectors": [],')
	sPiece.append('"selectorExpansion": true,')
	sPiece.append('"expect": 0,')
	sPiece.append('"misMatchThreshold" : 0.1,')
	sPiece.append('"requireSameDimensions": true')
	sPiece.append('},')




def urlLink(url):
	tmplist = url.split("/")
	return tmplist[-1]

scenarioScript = []

with open(sys.argv[1], "r") as f:
    names_list = [line.strip() for line in f if line.strip()]
    for i in names_list:
    	sPiece = []
    	scenarioParse(i)
    	scenarioScript.append(sPiece)

#f = open(sys.argv[1], 'r')
#for line in f:
	#print(line)
	#sPiece = []
	#scenarioParse(line)
	#scenarioScript.append(sPiece)

f = open('scenarioScript', 'w')
for i in scenarioScript:
	for j in i:
		print(j, file = f)	