import cgi
print('inside contact.py')
form = cgi.FieldStorage()
searchterm = form.getvalue('name')
print(searchterm)
