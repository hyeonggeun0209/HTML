user_id = input('id? ')
user_pwd = input('password? ')

'''
if user_pwd == '111111' :
    print('Hello')
else :
    print('Who are you?')
'''

'''
if user_id == 'nurung' :
    if user_pwd == '111111' :
        print('Hello')
    else :
        print('Who are you?')
else :
    print('Who are you?')
'''

if user_id == 'nurung' and user_pwd == '111111' :
    print('Hello nurung')
elif user_id == 'hongmin' and user_pwd == '222' :
    print('Hello hongmin')
else :
    print('Who are you?')
