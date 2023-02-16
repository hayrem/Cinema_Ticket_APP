function changeToImg() {
    const toImgArea = document.getElementById('imgItem');
  
    // To avoid the image will be cut by scroll, we need to scroll top before html2canvas.
    window.pageYOffset = 0;
    document.documentElement.scrollTop = 0
    document.body.scrollTop = 0
  
    // transform to canvas
    html2canvas(toImgArea, {
      allowTaint: true,
      taintTest: false,
      type: "view",
    }).then(function (canvas) {
      const sreenshot = document.getElementById('sreenshot');
      const downloadIcon = document.getElementById('download');
      
      // setting the canvas width  
      canvas.style.width = "100%";
  
      // append the canvas in the place that you want to show this image.  
      sreenshot.appendChild(canvas);
      console.log( downloadIcon);
  
      // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
      downloadIcon.href = canvas.toDataURL("image/jpg").replace("image/png", "image/octet-stream");
      downloadIcon.download = 'sreenshot.jpg';
    });
  }
  
  
  // clean the showing area
  function resetTheImageArea() {
    document.getElementById('sreenshot').innerHTML = "";
  }
  function deleteShow(movieID){
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '<a href="/seller/delete?movie_id='+movieID + '" style="color:white; text-decoration: none;">Yes, delete it!</a>'
    })
  }