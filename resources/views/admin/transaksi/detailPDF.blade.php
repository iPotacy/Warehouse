<style>
  body {
    font-family: Arial, sans-serif;
  }

  .invoice-container {
    width: 80%;
    margin: 20px auto;
    position: relative;
  }

  .header {
    text-align: center;
    margin-bottom: 20px;
  }

  .company-info {
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  .footer {
    text-align: right;
    margin-bottom: 10px; /* Menambahkan margin-bottom untuk jarak 10px dari total ke tanda tangan */
  }

  .signature {
    position: absolute;
    bottom: 25px; /* Menentukan jarak dari bawah */
    right: 20px;
    text-align: center;
    width: 200px;
  }

  .signature p {
    margin: 110px 0;
  }

  /* Tambahkan gaya tambahan sesuai kebutuhan Anda */
</style>
</head>
<body>
<div class="invoice-container">
  <div class="header">
    <h2>Invoice</h2>
  </div>

  <div class="company-info">
    <p>Nama Perusahaan: Warehouse</p>
    <p>Alamat: MSIB 5</p>
    <p>Nomor Invoice: {{$generate->id}}</p>
    <p>{{$generate->created_at}}</p>
  </div>
  
  <table>
    <thead>
      <tr>
        <th>Item</th>
        <th>Transaction</th>
        <th>Receiver</th>
        <th>Description</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <!-- Isi tabel disini -->
      <tr>
        <td>{{$generate->title_barang}}</td>
        <td>{{$generate->title_transaction}}</td>
        <td>{{$generate->receiver}}</td>
        <td>{{$generate->description}}</td>
        <td>{{$generate->quantity}}</td>
      </tr>
      <!-- Tambahkan baris sesuai dengan jumlah item -->
    </tbody>
  </table>

  <div class="footer">
    <p>Total Amount: {{$generate->quantity}}</p>
  </div>

  <div class="signature">
    <p>TTD Verifikasi</p>
    <p>(Mrs. Kepala Gudang)</p>
  </div>
</div>
</body>