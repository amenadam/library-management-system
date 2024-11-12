
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
main {
display: flex;
justify-content: center;
align-items: center;
}
#reader {
width: 600px;
}
#result {
text-align: center;
font-size: 1.5rem;
}
a{
            color: #fff;
            background-color: rgb(0, 162, 255);
            text-decoration: none;
            padding: 10px 20px 10px 20px ;
            border-radius: 25px;
            transition: 0.5s;
            position: relative;
            top: 50px;
        }
        a:hover {
            padding: 15px 25px 15px 20px;
        }
</style>
<main>
<div id="reader"></div>
<div id="result"></div>
</main>
<script>
const scanner = new Html5QrcodeScanner('reader', {
qrbox: {
width: 250,
height: 250,
},
fps: 20,
});
scanner.render(success, error);
function success(result) {
document.getElementById('result').innerHTML = `
<h2>Success!</h2>
<p>Book ID:<a href="is_book.php?book_id=${result}" color:#fff; background-color: rgb(0, 162, 255); >${result}</a></p>
`;
scanner.clear();
document.getElementById('reader').remove();
}
function error(err) {
console.error(err);
}
</script>
  
</body>
</html>
