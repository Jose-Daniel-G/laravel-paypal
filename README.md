composer require league/omnipay omnipay/paypal
✅ Create migration: 
------------------------------------------------
php artisan make:model Payment -mrc
✅ Migration file code:
------------------------------------------------
Schema::create('payments', function (Blueprint $table) {
    $table->id();
    $table->string('payment_id');
        $table->string('payer_id')->nullable();
        $table->string('payer_email'); 
        $table->string('amount',10,2);
        $table->string('currency');  
    $table->string('payment_status'); 
    $table->timestamps();
});
