<?php

namespace Tests\Unit;

use App\Models\Attachment;
use App\Models\Commission;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AttachmentTest extends TestCase
{
    use DatabaseTransactions;

    protected static $buyer;
    protected static $creator;
    protected static $commission;

    protected function setUp() : void
    {
        parent::setUp();

        static::$buyer = new User(['name'=>'Test Buyer', 'email'=>'1', 'password'=>'']);
        static::$buyer->save();
        static::$creator = new User(['name'=>'Test Creator', 'email'=>'2', 'password'=>'']);
        static::$creator->save();
        static::$commission = Commission::factory(['buyer_id'=>static::$buyer->id, 'creator_id'=>static::$creator->id, 'status'=>'Active'])->create();

    }

    /** @test */
    public function it_must_be_an_image()
    {
        $this->assertTrue(false);
    }
    /** @test */
    public function it_attaches_to_a_commission_when_created()
    {

        $attachment = Attachment::factory(
            [
                'commission_id'=>static::$commission->id,
                'user_id'=>static::$creator->id
            ]
        )->create();
        $att = static::$commission->fresh()->attachments->first();

        // Check that the commission contains this attachment.
        $this->assertEquals($att->id, $attachment->id);
    }
    /** @test */
    public function it_can_only_be_accessed_by_buyer_and_seller()
    {
        $this->assertTrue(false);
    }
    /** @test */
    public function it_is_not_deleted_when_seller_account_closes()
    {
        $this->assertTrue(false);
    }
}
