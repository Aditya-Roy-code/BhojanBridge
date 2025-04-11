import sys
from openai import OpenAI
client = OpenAI(api_key = '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')

description = sys.argv[1]

prompt = f'Description is {description}'

response = client.chat.completions.create(
    model = "gpt-4o-mini",
    temperature=0,
    max_tokens=10,
    messages = [{'role': 'system', 'content': 'You\'re my classifier who return single word category of food from given categories: ["Fruits", "Vegetables", "Cooked Food", "Bakery", "Dairy", "Packaged Food", "Grains", "Others"] ' },
                {'role': 'user', 'content': prompt}]
)
print(response.choices[0].message.content)