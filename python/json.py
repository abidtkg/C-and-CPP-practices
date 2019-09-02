# full_name = input("Enter your name: ")
# birth_year = int(input("Enter your age: "))
# print(f'Hi, {full_name}. How are you today?')
# feeling = input("Type: ")
# print(f'Hey {full_name}, your birth year is {birth_year} ? is it true?')
# age_confirm = input("y/n? :")
# print(f'you are {feeling} tody so, it\'s a good chance for do it')
# if age_confirm == "y":
#     print("true")
# elif age_confirm == "y":
#     print("False")
# else:
#     print("google.com")
full_name = input("What's your name? : ")
todays_year = int(input("Enter today's year : "))
born_age = int(input("What is your age? : "))
age = todays_year - born_age
print(f'Hi, {full_name} your birth date {age}')