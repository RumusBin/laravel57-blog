 <!-- Footer -->
 <footer class="py-5 bg-dark">
     <div class="container">
         <p class="m-0 text-center text-white">
             Phone:<a href="tel:+38{{$siteInfo['phone_number']}}"> {{$siteInfo['phone_number']}}</a>
         </p>
         <p class="m-0 text-center text-white">Address: {{$siteInfo['address']}}</p>
         <p class="m-0 text-center text-white">
             Email: <a href="mailto:{{$siteInfo['email']}}">{{$siteInfo['email']}}</a>
         </p>
         <p class="mt-3 text-center text-white">
             Copyright &copy; {{$siteInfo['copyright'] . ' ' . \Carbon\Carbon::now()->year}}
         </p>
     </div>
     <!-- /.container -->
 </footer>
