<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // توليد مفتاح أساسي تلقائي
            $table->string('name'); // اسم الصنف
            $table->integer('quantity'); // الكمية كرقم صحيح
            $table->text('description')->nullable(); // الوصف (يمكن أن يكون فارغًا)
            $table->decimal('price', 10, 2); // السعر (10 أرقام بالإجمالي و 2 أرقام بعد الفاصلة)
            $table->timestamps(); // تاريخ ووقت الإنشاء والتحديث التلقائي

            // يمكنك أيضًا إضافة مفاتيح أخرى هنا حسب الحاجة
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
