# Temperature Sonification 🌡️🔊

Welcome to the **Temperature Sonification** repository! This project explores the sonification of temperature sensor data, revealing structured, speech-like patterns that align with geomagnetic disturbances. It includes original dataset processing, synthetic signal attempts, and a full write-up. 

[![Download Releases](https://img.shields.io/badge/Download_Releases-Here-brightgreen)](https://github.com/vega11325/temperature-sonification/releases)

## Table of Contents

1. [Introduction](#introduction)
2. [Project Overview](#project-overview)
3. [Getting Started](#getting-started)
   - [Prerequisites](#prerequisites)
   - [Installation](#installation)
4. [Usage](#usage)
5. [Data Processing](#data-processing)
6. [Sonification Techniques](#sonification-techniques)
7. [Results](#results)
8. [Contributing](#contributing)
9. [License](#license)
10. [Acknowledgments](#acknowledgments)

---

## Introduction

In recent years, the intersection of environmental monitoring and audio analysis has gained traction. This project aims to bridge that gap by transforming temperature data into auditory experiences. By analyzing how temperature fluctuations correlate with geomagnetic disturbances, we uncover patterns that are not only interesting but also useful for scientific exploration.

## Project Overview

This repository contains the following components:

- **Original Dataset Processing**: Tools and scripts to clean and prepare temperature sensor data.
- **Synthetic Signal Attempts**: Methods for generating sound based on the processed data.
- **Full Write-Up**: A detailed explanation of the findings and methodologies used in this project.

The project is ideal for those interested in open science, environmental monitoring, and audio analysis.

## Getting Started

To get started with this project, follow the instructions below.

### Prerequisites

Before you begin, ensure you have the following installed:

- Python 3.x
- Libraries: `numpy`, `scipy`, `matplotlib`, `pandas`, `sounddevice`, `librosa`
- Raspberry Pi (optional, for real-time data collection)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/vega11325/temperature-sonification.git
   ```

2. Navigate to the project directory:

   ```bash
   cd temperature-sonification
   ```

3. Install the required libraries:

   ```bash
   pip install -r requirements.txt
   ```

## Usage

To run the project, execute the main script:

```bash
python main.py
```

This will start the data processing and sonification. Ensure your temperature sensor is connected if you are using a Raspberry Pi.

## Data Processing

The data processing component focuses on cleaning and preparing the temperature data for analysis. Here’s a brief overview of the steps involved:

1. **Data Collection**: Collect temperature readings from sensors. 
2. **Data Cleaning**: Remove any anomalies or outliers from the dataset.
3. **Data Transformation**: Normalize the data to ensure consistency.

### Example Code Snippet

Here’s a simple example of how to process the temperature data:

```python
import pandas as pd

# Load data
data = pd.read_csv('temperature_data.csv')

# Clean data
data = data[data['temperature'] >= -50]  # Remove unrealistic values

# Normalize data
data['temperature'] = (data['temperature'] - data['temperature'].mean()) / data['temperature'].std()
```

## Sonification Techniques

Sonification is the process of converting data into sound. In this project, we explore various techniques to represent temperature data audibly. 

### Techniques Used

1. **Frequency Modulation**: Mapping temperature values to frequency changes.
2. **Amplitude Modulation**: Adjusting volume based on temperature fluctuations.
3. **Rhythmic Patterns**: Creating rhythms that reflect temperature changes over time.

### Example Code Snippet

Here’s how to generate sound based on temperature data:

```python
import numpy as np
import sounddevice as sd

def generate_sound(frequency, duration):
    sample_rate = 44100
    t = np.linspace(0, duration, int(sample_rate * duration), endpoint=False)
    audio = 0.5 * np.sin(2 * np.pi * frequency * t)
    sd.play(audio, sample_rate)
    sd.wait()

# Example usage
generate_sound(440, 1)  # Play a 440 Hz tone for 1 second
```

## Results

The results section provides an overview of the findings from the sonification process. By analyzing the generated audio, we can identify patterns that correspond to temperature changes and geomagnetic disturbances.

### Findings

- **Structured Patterns**: The audio often reveals structured, speech-like patterns that correlate with specific temperature changes.
- **Geomagnetic Disturbances**: Certain sounds align closely with known geomagnetic events, indicating a potential link between temperature and electromagnetic activity.

## Contributing

Contributions are welcome! If you have ideas for improvements or new features, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature.
3. Make your changes and commit them.
4. Push your branch and create a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Acknowledgments

We thank the contributors and the open-source community for their support. Special thanks to those who provided feedback and helped refine the project.

For more information, visit the [Releases section](https://github.com/vega11325/temperature-sonification/releases) to download the latest updates and releases. 

Feel free to explore, experiment, and enjoy the world of temperature sonification!