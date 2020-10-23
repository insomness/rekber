<section id="transaction" class="transaction">
    <div class="container-fluid" data-aos="fade-up">

      <header class="section-header">
        <h3>Mulai Transaksi</h3>
      </header>

      <div class="row">
          <div class="col-md-6 mx-auto">
            <form>
                <div class="form-group">
                    {!! Form::label('profesi', 'Anda sebagai', []) !!}
                    {!! Form::select('profesi', ['seller' => 'seller', 'buyer' => 'buyer'], null, ['class' => 'form-control']) !!}
                  </div>
                <div class="row">
                  <div class="col">
                      {!! Form::label('first_name', 'Nama Depan') !!}
                      {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="col">
                    {!! Form::label('last_name', 'Nama Belakang') !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                  </div>
                </div>
                <div class="form-group">
                    {!! Form::label('whatsapp', 'Whatsapp anda', []) !!}
                    {!! Form::number('whatsapp', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tipe_produk', 'Tipe Produk', []) !!}
                    {!! Form::select('tipe_produk', ['fisik' => 'Fisik', 'digital' => 'Digital'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('product', 'Nama produk', []) !!}
                    {!! Form::text('product', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price', 'Harga', []) !!}
                    {!! Form::number('price', null, ['class' => 'form-control']) !!}
                </div>
              </form>
          </div>
      </div>

    </div>

  </section>
