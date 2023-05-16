import os
import string
import sys
from bardapi import Bard

os.environ['_BARD_API_KEY']= sys.argv[1]

text = sys.argv[2]
response = Bard().get_answer(text)['content']

print(response)

