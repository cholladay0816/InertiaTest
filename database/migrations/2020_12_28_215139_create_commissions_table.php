<?php

use App\Models\CommissionPreset;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'buyer_id');
            $table->foreignIdFor(User::class, 'creator_id');
            $table->foreignIdFor(CommissionPreset::class, 'preset_id')->nullable();
            $table->string('title');
            $table->string('description');
            $table->string('memo');
            $table->decimal('price')->unsigned();
            $table->integer('days_to_complete')->unsigned();
            $table->dateTime('date_due')->nullable();

            $table->enum('status',
            [
                'Unpaid',           // Created request
                'Pending',          // Entered payment details, now visible and sent to creator
                'Declined',         // Creator declined
                'Capture-Failed',   // Failed to capture payment after being accepted
                'Active',           // Accepted and payment success, order now started
                'Overdue',          // Overdue order, may be canceled by client
                'Canceled',         // Order canceled by creator
                'Completed',        // Completed order, under review by client
                'Disputed',         // Client disputed the finished product
                'Refunded',         // Order was refunded
                'Archived'          // Order was archived after completopm
            ]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commissions');
    }
}
