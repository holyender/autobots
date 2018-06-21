import re

x = "hello world beautiful soup id= edit"

y = re.compile('[id=]')

result = re.match(y,x)

print(result)

