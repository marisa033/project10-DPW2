<style>

body {
  background: #eecda3;
  background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
  background: linear-gradient(to right, #eecda3, #ef629f);
  min-height: 100vh;
}
</style>

<link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center">
    <h1 class="display-4"><b>Keranjang Saya<b></h1>
    <p class="lead mb-0"></p>
    <p class="lead"> <a href="https://bootstrapious.com/snippets" class="text-white font-italic">
            <u></u></a>
    </p>
  </div>
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase text-center">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="{{url('public')}}/images/women-clothes-img.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Woman Scart</a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle text-center"><strong>Rp. 65.000</strong></td>
                  <td class="border-0 align-middle text-center"><strong><button class="btn btn-light"><i class="fa fa-minus"></i></button> 3 <button class="btn btn-light"><i class="fa fa-plus"></i></button></strong></td>
                  <td class="border-0 align-middle text-center"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="{{url('public')}}/images/laptop-img.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Laptop</a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle text-center"><strong>Rp. 3.655.000</strong></td>
                  <td class="border-0 align-middle text-center"><strong><button class="btn btn-light"><i class="fa fa-minus"></i></button> 3 <button class="btn btn-light"><i class="fa fa-plus"></i></button></strong></td>
                  <td class="border-0 align-middle text-center"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="{{url('public')}}/images/jhumka-img.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Jumkas</a></h5>
                      </div>
                    </div>
                    <td class="border-0 align-middle text-center"><strong>Rp. 765.000</strong></td>
                    <td class="border-0 align-middle text-center"><strong> <button class="btn btn-light"><i class="fa fa-minus"></i></button> 3 <button class="btn btn-light"><i class="fa fa-plus"></i></button></button></strong></td>
                    <td class="border-0 align-middle text-center"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                    </td>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn btn-block btn-warning"><b>Check Out</b></button></td>
                    </tr>
                </tr>
              </tbody>
            </table>
            
          </div>
          <!-- End -->
        </div>
      </div>