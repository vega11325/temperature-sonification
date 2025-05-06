# Temperature Sonification and Environmental EMF Artifact Detection

**Author:** Troy McQuinn  
**Status:** Experimental / Open Research  
**Keywords:** sonification, EMF interference, geomagnetic storms, pareidolia, audio synthesis, environmental sensing

---

![Spectrogram of Temperature Audio](Spectrogram - Snippet1 (May-Nov 2018).png)

## 🧊 What This Is

This project explores the unexpected and oddly structured results of sonifying temperature data collected from a low-cost USB thermometer. By mapping each 5-minute temperature reading to a single 16-bit audio sample and playing the resulting waveform at 8,000 Hz, the dataset was time-compressed by a factor of 2.4 million.

Surprisingly, the resulting audio sometimes exhibits **speech-like formants and syllabic rhythms**—particularly during periods of known **geomagnetic activity**.

---

## 📡 Why It’s Weird

While it started as a quirky sonification experiment, cross-referencing the audio with NOAA space weather logs revealed a persistent correlation between **structured audio artifacts** and **solar/geomagnetic storm windows**.

Even after ruling out software artifacts via independent Python and PHP implementations, the effect remained. This suggests that the USB thermometer might be acting—unintentionally—as a crude EMF sensor due to poor shielding or internal analog quirks.

---

## 📁 What’s Inside

- `paper/` – Full write-up in ODT and PDF formats (with figures and event alignment)
- `code/` – Sonification scripts in both PHP and Python
- `audio_samples/` – WAV files of real and simulated data
- `figures/` – Spectrograms and waveform plots of key audio segments
- `data.zip` – Temperature log data
- `README.md` – This file

---

## 🔬 Simulated Control Experiments

Several synthetic datasets were generated to test whether **pareidolia alone** could explain the perception of speech-like structure. These included:

- Simulated thermal cycles with realistic modulation
- Formant-band noise shaping
- Chaotic amplitude envelopes
- Transient consonant-like bursts
- Phrase pacing and pitch glides

Despite best efforts, none of the synthetic signals reproduced the same kind of **uncanny speech illusion** found in the real dataset—suggesting the phenomenon may involve real-world nonlinearities or subtle environmental-electronic interactions.

See Section 6 of the write-up for detailed results.

---

## 🧪 Reproduction Instructions

All code runs with standard PHP 7+ or Python 3.8+ with `numpy`, `scipy`, and `matplotlib`.

1. Clone the repo.
2. Unzip and place your `.dat` log files in `data/` (format: `<timestamp> <temp> <date> <time>`).
3. Run the appropriate script in `code/` to generate a `.wav` file.
4. Analyze audio in Audacity or spectrogram tools like SoX or matplotlib.

---

## 🧠 Final Thoughts

This work walks a fine line between traditional signal analysis and what could be described as *accidental instrumentation*. Whether these structures are artifacts, interference, or something more exotic, they appear real, repeatable, and worthy of further exploration.

Questions? Feedback? Want to fork this into a haunted USB ghost detector? Go for it.

---

## 📜 License

- Code: MIT License
- Write-up: [Creative Commons BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/)
