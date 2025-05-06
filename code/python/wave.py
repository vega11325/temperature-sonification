import numpy as np
import wave
import struct

# Load your temperature samples (replace with actual loading logic)
# For example: temperatures = np.loadtxt("data/temps.txt")
temperatures = [...]  # List or NumPy array of float temperature values

# Step 1: Clip extreme values and scale to 16-bit range
min_temp = 40.0
max_temp = 110.0

temps_clipped = np.clip(temperatures, min_temp, max_temp)
scaled = ((temps_clipped - min_temp) / (max_temp - min_temp) * 65535 - 32768).astype(np.int16)

# Step 2: Write to a mono WAV file at 8000 Hz (one sample = one 5-minute reading)
sample_rate = 8000
output_path = "temperature_audio.wav"

with wave.open(output_path, 'w') as wav_file:
    wav_file.setnchannels(1)          # Mono
    wav_file.setsampwidth(2)          # 16-bit samples
    wav_file.setframerate(sample_rate)
    for sample in scaled:
        wav_file.writeframes(struct.pack('<h', sample))
