body, html {
    height: 100%;
    margin: 0;
  }
  
  .background-slider {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    animation: slideBackground 10s infinite;
  }
  
  @keyframes slideBackground {
    0% { background-image: url('image1.jpg'); }
    33.33% { background-image: url('image2.jpg'); }
    66.66% { background-image: url('image3.jpg'); }
    100% { background-image: url('image1.jpg'); }
  }
  