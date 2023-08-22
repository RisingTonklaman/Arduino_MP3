const audioElement = document.createElement('audio');
document.body.appendChild(audioElement);

const audioURL = 'http://localhost/zzzz.mp3';

fetch(audioURL)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.blob(); // Fetch the response as a Blob
  })
  .then(blob => {
    // Create a blob URL from the retrieved blob
    const blobURL = URL.createObjectURL(blob);
    
    // Set the blob URL as the source of the audio element
    audioElement.src = blobURL;

    // Play the audio
    audioElement.play();
  })
  .catch(error => {
    console.error('Fetch error:', error);
  });
