import warnings
import whisper
import sys

warnings.filterwarnings("ignore")
model = whisper.load_model("turbo")
audio_path = sys.argv[1]
# audio_path = "C:\\Users\\YATHARTH\\Desktop\\FoodSaverProject\\uploads\\recording.mp3"
result = model.transcribe(audio_path)
print(result["text"])