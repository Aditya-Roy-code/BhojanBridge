import sys
from openai import OpenAI

client = OpenAI(api_key='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')

#
# info = sys.argv[1]
info = '''
Food : Paneer 2kg Delhi India
pickup to be done by ngo
'''

response = client.chat.completions.create(
    model="gpt-4o-mini",
    messages=[
        {"role": "system", "content": "Generate a short, polite message in 50 words to ask to pickup and show interest in their donation, as You are a NGO (No name template to be given, start with dear donor only, only use given knowledge to provide generic message)"},
        {"role": "user", "content": f"Here is the info: {info}"}
    ],
    max_tokens=60,
    temperature=0.7
)

print(response.choices[0].message.content)
