<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;
use App\Forum;
use App\Comment;
use App\User;
use App\Account;
use App\Order;
use App\Trades;

class ForumControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp():void {
        parent::setUp(); // performs set up
        $user = factory(User::class)->create();
        $this->be($user);
    }
    /**
     * @runInSeparateProcess
    */
    public function testStoreForum()
    {
        $this->withoutExceptionHandling();
        $forum = factory(Forum::class)->create();
        $response = $this->post('forum/create',[
            'forum_id' => "FOM".$this->faker->randomDigit,
            'user_id'=>"EST".$this->faker->randomDigit,
            'tag' => $this->faker->numberBetween($min = 1, $max = 9),
            'title' => $this->faker->text($maxNbChars = 20),
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response->assertStatus(302);
        $this->assertTrue(count(Forum::all())>1);
    }

        /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForStoreForum()
    {

        $this->withExceptionHandling();
        $response = $this->post('forum/create',[]);
        $response->assertStatus(500);
        $this->assertTrue(count(Forum::all())<1);
    }

    /**
     * @runInSeparateProcess
    */
    public function testUpdateForum()
    {

        $this->withoutExceptionHandling();
        $forum = Forum::create([
            'forum_id' => "FOM".$this->faker->randomDigit,
            'user_id'=>"EST".$this->faker->randomDigit,
            'tag' => $this->faker->numberBetween($min = 1, $max = 9),
            'title' => $this->faker->text($maxNbChars = 20),
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response = $this->put('forum/update',[
            'id' => $forum->forum_id,
            'tag' => $this->faker->numberBetween($min = 1, $max = 9),
            'title' => $this->faker->text($maxNbChars = 20),
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response->assertStatus(302);
    }

    /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForUpdateForum()
    {
        $forum = Forum::create([
            'forum_id' => "FOM".$this->faker->randomDigit,
            'user_id'=>"EST".$this->faker->randomDigit,
            'tag' => $this->faker->numberBetween($min = 1, $max = 9),
            'title' => $this->faker->text($maxNbChars = 20),
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response = $this->put('forum/update',[
            'id' => $forum->forum_id]);
        $response->assertStatus(500);
    }

    /**
     * @runInSeparateProcess
    */
    public function testDeleteForum()
    {
        $this->withoutExceptionHandling();
        $id_to_be_deleted = "FOM1";
        $tag = random_int(0, 9);
        for($i = 0;$i<5;$i++)
        {
            $this->post('forum/create',[
                'forum_id' =>"FOM".$this->faker->randomDigit,
                'user_id'=>"EST".$this->faker->randomDigit,
                'tag' => $this->faker->numberBetween($min = 1, $max = 9),
                'title' => $this->faker->text($maxNbChars = 20),
                'contents' => $this->faker->text($maxNbChars = 50)
            ]);
        }
        $response = $this->get('forum/'.$tag.'/'.$id_to_be_deleted.'/destroy');
        $response->assertStatus(302);
        $this->assertDatabaseMissing('forum', ['forum_id' => $id_to_be_deleted]);
    }
        /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForDeleteForum()
    {
        $id_to_be_deleted = "FOM".random_int(10, 20);
        $tag = random_int(0, 9);
        for($i = 0;$i<5;$i++)
        {
            $this->post('forum/create',[
                'forum_id' =>"FOM".$this->faker->randomDigit,
                'user_id'=>"EST".$this->faker->randomDigit,
                'tag' => $this->faker->numberBetween($min = 1, $max = 9),
                'title' => $this->faker->text($maxNbChars = 20),
                'contents' => $this->faker->text($maxNbChars = 50)
            ]);
        }
        $response = $this->get('forum/'.$tag.'/'.$id_to_be_deleted.'/destroy');
        $response->assertStatus(500);
    }

        /**
     * @runInSeparateProcess
    */
    public function testStoreComment()
    {
        $this->withoutExceptionHandling();
        $id = "FOM".$this->faker->randomDigit;
        $fakeTag = "All%20Posts";
        $response = $this->post('forum/'.$id,[
            'forum_id' => "FOM".$this->faker->randomDigit,
            'comment_id' => "COM".$this->faker->randomDigit,
            'user_id'=>"EST".$this->faker->randomDigit,
            'tag' => $this->faker->numberBetween($min = 1, $max = 9),
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response->assertStatus(302);
        $this->assertTrue(count(Comment::all())>0);
    }

        /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForStoreComment()
    {
        $id = "FOM".$this->faker->randomDigit;
        $fakeTag = "All%20Posts";
        $response = $this->post('forum/'.$id.'?tag='.$fakeTag ,[]);
        $response->assertStatus(500);
        $this->assertTrue(count(Comment::all())<1);
    }

        /**
     * @runInSeparateProcess
    */
    public function testUpdateComment()
    {
        $this->withoutExceptionHandling();
        $id = "COM".$this->faker->randomDigit;
        $Comment = Comment::create([
            'forum_id' => "FOM".$this->faker->randomDigit,
            'comment_id' => $id,
            'user_id'=>"EST".$this->faker->randomDigit,
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
         $response = $this->put('forum/comment/update',[
            'commentID' => $id,
            'commentContents' => $this->faker->text($maxNbChars = 50),
            'forum_id' => "FOM".$this->faker->randomDigit,
            'tagForumID' => $this->faker->numberBetween($min = 1, $max = 9),
        ]);
        $response->assertStatus(302);
    }
    /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForUpdateComment()
    {
        $Comment = Comment::create([
            'forum_id' => "FOM".$this->faker->randomDigit,
            'comment_id' => "COM".$this->faker->randomDigit,
            'user_id'=>"EST".$this->faker->randomDigit,
            'contents' => $this->faker->text($maxNbChars = 50)
        ]);
        $response = $this->put('forum/comment/update',[]);
        $response->assertStatus(500);
    }

     /**
     * @runInSeparateProcess
    */
    public function testDeleteComment()
    {
        $this->withoutExceptionHandling();
        $id_to_be_deleted = "COM1";
        $id  = "FOM".$this->faker->randomDigit;
        $tag = random_int(0, 9);
        for($i = 0;$i<5;$i++)
        {
            $this->post('forum/'.$id,[
                'comment_id' => "COM".$this->faker->randomDigit,
                'user_id'=>"EST".$this->faker->randomDigit,
                'tag' => $this->faker->numberBetween($min = 1, $max = 9),
                'contents' => $this->faker->text($maxNbChars = 50)
            ]);
        }
        $response = $this->get('forum/comment/destroy/'.$id_to_be_deleted.'/'.$tag,[
            'forum_id' => "FOM".$this->faker->randomDigit
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseMissing('comment', ['comment_id' => $id_to_be_deleted]);
    }
        /**
     * @runInSeparateProcess
    */
    public function testExceptionHandlingForDeleteComment()
    {
        $id_to_be_deleted = "COM".random_int(10, 20);
        $id  = "FOM".$this->faker->randomDigit;
        $tag = random_int(0, 9);
        for($i = 0;$i<5;$i++)
        {
            $this->post('forum/'.$id,[
                'comment_id' => "COM".$this->faker->randomDigit,
                'user_id'=>"EST".$this->faker->randomDigit,
                'tag' => $this->faker->numberBetween($min = 1, $max = 9),
                'contents' => $this->faker->text($maxNbChars = 50)
            ]);
        }
        $response = $this->get('forum/comment/destroy/'.$id_to_be_deleted.'/'.$tag);
        $response->assertStatus(500);
    }


}
