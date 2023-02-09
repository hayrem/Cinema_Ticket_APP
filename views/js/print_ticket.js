let canvas = document.querySelector('.btn-save').addEventListener('click', function() {
    
    html2canvas(document.querySelector('.ticket'),{
        onrendered: function(canvas) {
            document.body.appendChild(canvas);
          return Canvas2Image.saveAsPNG(canvas);
        }
    });
});

console.log(canvas);