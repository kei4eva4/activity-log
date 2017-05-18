<?php namespace JackJoe\ActivityLog\Test;

use Auth;
use Illuminate\Support\Collection;

use JackJoe\ActivityLog\Models\Activity;
use JackJoe\ActivityLog\Test\Models\User;

class ActivityLogTest extends TestCase
{
  public function setUp()
  {
    parent::setUp();
  }

  /**
   * check return instance
   * check user relation
   * check all data fields are saved
   * check auto_set_user_id
   * check ip address
   * check user agent
   * check version set
   */


  /** @test */
  public function it_can_log_an_activity()
  {
    // activity()->log($this->activityDescription);
    //
    // $this->assertEquals($this->activityDescription, $this->getLastActivity()->description);
  }

  // /** @test */
  // public function it_will_not_log_an_activity_when_the_log_is_not_enabled()
  // {
  //   config(['laravel-activitylog.enabled' => false]);
  //
  //   activity()->log($this->activityDescription);
  //
  //   $this->assertNull($this->getLastActivity());
  // }
  //
  // /** @test */
  // public function it_will_log_an_activity_when_enabled_option_is_null()
  // {
  //   config(['laravel-activitylog.enabled' => null]);
  //
  //   activity()->log($this->activityDescription);
  //
  //   $this->assertEquals($this->activityDescription, $this->getLastActivity()->description);
  // }
  //
  // /** @test */
  // public function it_will_log_to_the_default_log_by_default()
  // {
  //   activity()->log($this->activityDescription);
  //
  //   $this->assertEquals(config('laravel-activitylog.default_log_name'), $this->getLastActivity()->log_name);
  // }
  //
  // /** @test */
  // public function it_can_log_an_activity_to_a_specific_log()
  // {
  //   $customLogName = 'secondLog';
  //
  //   activity($customLogName)->log($this->activityDescription);
  //   $this->assertEquals($customLogName, $this->getLastActivity()->log_name);
  //
  //   activity()->useLog($customLogName)->log($this->activityDescription);
  //   $this->assertEquals($customLogName, $this->getLastActivity()->log_name);
  // }
  //
  // /** @test */
  // public function it_can_log_an_activity_with_a_subject()
  // {
  //   $subject = Article::first();
  //
  //   activity()
  //     ->performedOn($subject)
  //     ->log($this->activityDescription);
  //
  //   $firstActivity = Activity::first();
  //
  //   $this->assertEquals($subject->id, $firstActivity->subject->id);
  //   $this->assertInstanceOf(Article::class, $firstActivity->subject);
  // }
  //
  // /** @test */
  // public function it_can_log_an_activity_with_a_causer()
  // {
  //   $user = User::first();
  //
  //   activity()
  //     ->causedBy($user)
  //     ->log($this->activityDescription);
  //
  //   $firstActivity = Activity::first();
  //
  //   $this->assertEquals($user->id, $firstActivity->causer->id);
  //   $this->assertInstanceOf(User::class, $firstActivity->causer);
  // }
  //
  // /** @test */
  // public function it_can_log_activity_with_properties()
  // {
  //   $properties = [
  //     'property' => [
  //       'subProperty' => 'value',
  //     ],
  //   ];
  //
  //   activity()
  //     ->withProperties($properties)
  //     ->log($this->activityDescription);
  //
  //   $firstActivity = Activity::first();
  //
  //   $this->assertInstanceOf(Collection::class, $firstActivity->properties);
  //   $this->assertEquals('value', $firstActivity->getExtraProperty('property.subProperty'));
  // }
  //
  // /** @test */
  // public function it_can_log_activity_with_a_single_properties()
  // {
  //   activity()
  //     ->withProperty('key', 'value')
  //     ->log($this->activityDescription);
  //
  //   $firstActivity = Activity::first();
  //
  //   $this->assertInstanceOf(Collection::class, $firstActivity->properties);
  //   $this->assertEquals('value', $firstActivity->getExtraProperty('key'));
  // }
  //
  // /** @test */
  // public function it_can_translate_a_given_causer_id_to_an_object()
  // {
  //   $userId = User::first()->id;
  //
  //   activity()
  //     ->causedBy($userId)
  //     ->log($this->activityDescription);
  //
  //   $firstActivity = Activity::first();
  //
  //   $this->assertInstanceOf(User::class, $firstActivity->causer);
  //   $this->assertEquals($userId, $firstActivity->causer->id);
  // }
  //
  // /**
  //  * @test
  //  *
  //  * @requires !Travis
  //  */
  // public function it_will_throw_an_exception_if_it_cannot_translate_a_causer_id()
  // {
  //   $this->setExpectedException(CouldNotLogActivity::class);
  //
  //   activity()->causedBy(999);
  // }
  //
  // /**
  //  * @test
  //  *
  //  * @requires !Travis
  //  */
  // public function it_will_use_the_logged_in_user_as_the_causer_by_default()
  // {
  //   $userId = 1;
  //
  //   Auth::login(User::find($userId));
  //
  //   activity()->log('hello poetsvrouwman');
  //
  //   $this->assertInstanceOf(User::class, $this->getLastActivity()->causer);
  //   $this->assertEquals($userId, $this->getLastActivity()->causer->id);
  // }
  //
  // /** @test */
  // public function it_can_replace_the_placeholders()
  // {
  //   $article = Article::create(['name' => 'article name']);
  //
  //   $user = Article::create(['name' => 'user name']);
  //
  //   activity()
  //     ->performedOn($article)
  //     ->causedBy($user)
  //     ->withProperties(['key' => 'value', 'key2' => ['subkey' => 'subvalue']])
  //     ->log('Subject name is :subject.name, causer name is :causer.name and property key is :properties.key and sub key :properties.key2.subkey');
  //
  //   $expectedDescription = 'Subject name is article name, causer name is user name and property key is value and sub key subvalue';
  //
  //   $this->assertEquals($expectedDescription, $this->getLastActivity()->description);
  // }
}