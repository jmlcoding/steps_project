<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Contact Us</title>
</head>
<body>
    <x-navbar/>
    {{-- section image --}}
    <section class="sectionimg">
     <div class="contact">
        <h1>Contact Us</h1>
        <div>
           <a href="{{route('index')}}" style="color:#fff">Home</a>
           <span style="color: #fff">&gt;</span> <a href="{{route('contact')}}" style="color:rgb(242, 131, 52);font-weight:500;">Contact Us</a>
        </div>
     </div>
    </section>
    {{-- section grid form with contact details --}}
    <section class="contactdetails">
     <div class="left-container">
     <form action="">
      <label for="">First Name*</label>
      <input type="text" name="te">
      <label for="">Last Name*</label>
      <input type="text">
      <label for="">Email*</label>
      <input type="text">
     </form>
     </div>
     <div class="divider"></div>
     <div class="right-container">
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
        <p>hello</p>
     </div>
    </section>
</body>
</html>