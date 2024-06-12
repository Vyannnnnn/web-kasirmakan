<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  <title>Home</title>
  <style>
    body {
      background-color: white;
    }
  </style>
</head>

<body>
  <section class="lg:py-[135px]  bg-[#EAEAEA] " id="card-harga">
    <div class="container flex flex-wrap justify-center">

      <div class="bg-white my-5 lg:my-0 py-3 lg:py-5 rounded-lg">
        <div class="mx-auto max-w-7xl px-6 lg:px-6">
          <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Langkah mudah menyelesaikan pembayaran</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Silahkan baca dan pahami ketentuan dibawah ini dengan seksama sebelum anda melakukan pembayaran</p>
          </div>
          <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
            <div class="p-8 sm:p-10 lg:flex-auto">
              <h3 class="text-2xl font-bold tracking-tight text-gray-900">Basic plan</h3>
              <p class="mt-6 text-base leading-7 text-gray-600">Berikut ini merupakan beberapa keuntungan yang akan anda dapatkan ketika memilih paket basic plan dari kami</p>
              <div class="mt-10 flex items-center gap-x-4">
                <h4 class="flex-none text-sm font-semibold leading-6 text-primary">Apa yang saya dapatkan ?</h4>
                <div class="h-px flex-auto bg-gray-100"></div>
              </div>
              <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Pembayaran via QRIS
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Mengelola meja
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Mengelola urutan antrian
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Mengelola menu makanan & minuman
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Laporan penjualan perbulan
                </li>
              </ul>
            </div>
            <div class="p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0 ">
              <div class="rounded-2xl bg-bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-[120px]">
                <div class="mx-auto max-w-xs px-8">
                  <p class="text-base font-semibold text-gray-600">Bayar sekarang dan nikmati layanan kami</p>
                  <p class="mt-6 flex items-baseline justify-center gap-x-2">
                    <span class="text-5xl font-bold tracking-tight text-gray-900">Rp280000</span>
                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">,00</span>
                  </p>
                  <a id="pay-button1" class="cursor-pointer mt-10 block w-full rounded-md bg-primary px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-opacity-90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Bayar</a>
                </div>
              </div>
            </div>
          </div>

          <!-- card premium -->
          <div class="mx-auto mt-16 mb-5 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
            <div class="p-8 sm:p-10 lg:flex-auto">
              <h3 class="text-2xl font-bold tracking-tight text-gray-900">Premium plan</h3>
              <p class="mt-6 text-base leading-7 text-gray-600">Berikut ini merupakan beberapa keuntungan yang akan anda dapatkan ketika memilih paket premium plan dari kami</p>
              <div class="mt-10 flex items-center gap-x-4">
                <h4 class="flex-none text-sm font-semibold leading-6 text-primary">Apa yang saya dapatkan ?</h4>
                <div class="h-px flex-auto bg-gray-100"></div>
              </div>
              <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Pembayaran via QRIS
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Mengelola meja
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Mengelola urutan antrian
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Mengelola menu makanan & minuman
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  Laporan penjualan perbulan
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
               Bisa diakses lebih dari 1 kasir
                </li>
                <li class="flex gap-x-3">
                  <svg class="h-6 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                Gratis akses 20 hari
                </li>
              </ul>
            </div>
            <div class="p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0 ">
              <div class="rounded-2xl bg-bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-[120px]">
                <div class="mx-auto max-w-xs px-8">
                  <p class="text-base font-semibold text-gray-600">Bayar sekarang dan nikmati layanan kami</p>
                  <p class="mt-6 flex items-baseline justify-center gap-x-2">
                    <span class="text-5xl font-bold tracking-tight text-gray-900">Rp3300000</span>
                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">,00</span>
                  </p>
                  <a id="pay-button2" class="cursor-pointer mt-10 block w-full rounded-md bg-primary px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-opacity-90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Bayar</a>
                </div>
              </div>
            </div>
          </div>

          <!-- </card premiumdiv> -->
        </div>
      </div>
  </section>

  <!-- <button id="pay-button">Pay!</button> -->
  <!-- <pre><div id="result-json">JSON result will appear here after payment:<br></div></pre>  -->

  <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-1qs8QkezZOtGw2BT"></script>
  <script type="text/javascript">
    function handleButtonClick(snapToken) {
      return function() {
        snap.pay(snapToken, {
          onSuccess: function(result) {
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onPending: function(result) {
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onError: function(result) {
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    }

    document.getElementById('pay-button1').onclick = handleButtonClick('<?= $snapToken ?>');
    document.getElementById('pay-button2').onclick = handleButtonClick('<?= $snapToken ?>');
  </script>

</body>

</html>