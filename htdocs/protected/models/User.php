<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $userid
 * @property string $password
 * @property string $username
 * @property string $useremail
 * @property integer $usersex
 * @property string $joindate
 * @property string $lastlogin
 * @property integer $userlogins
 * @property integer $lockuser1
 * @property string $userbirthday
 * @property string $userquesion
 * @property string $useranswer
 * @property string $userlastip
 * @property integer $userphoto
 * @property integer $userphotos
 * @property string $oicq
 * @property string $useraddress
 * @property string $mobile
 * @property string $realname
 * @property integer $bodyheight
 * @property integer $bodyweight
 * @property string $education
 * @property string $occupation
 * @property string $workprovince
 * @property string $workcity
 * @property string $workdistrict
 * @property string $worktown
 * @property string $workstreet
 * @property string $workstreetnumber
 * @property string $workbuilding
 * @property string $workcountry
 * @property string $lookingfor
 * @property string $shengxiao
 * @property string $constellation
 * @property string $bloodtype
 * @property string $bodytype
 * @property string $residenceprov
 * @property string $residencecity
 * @property string $homeresidence
 * @property string $homeprovince
 * @property string $homecity
 * @property string $folk
 * @property string $believe
 * @property string $school
 * @property string $employment
 * @property string $jobtitle
 * @property string $marry
 * @property string $house
 * @property string $salary
 * @property string $country
 * @property string $wine
 * @property string $smoking
 * @property string $character
 * @property string $specialist
 * @property string $duty
 * @property string $advantage
 * @property string $joblookingfor
 * @property string $workexperience
 * @property string $intro
 * @property string $introdate
 * @property string $activities
 * @property string $sports
 * @property string $movies
 * @property string $musics
 * @property string $tasts
 * @property string $liketogoes
 * @property string $potations
 * @property string $datingplaces
 * @property string $loverlookings
 * @property string $firstlove
 * @property string $lives
 * @property string $likest
 * @property string $dislikes
 * @property string $virtues
 * @property string $shortcomings
 * @property string $songs
 * @property string $colors
 * @property string $stars
 * @property string $idealities
 * @property string $unforgetable
 * @property string $admiring
 * @property string $bodylike
 * @property string $companyname
 * @property string $companytel
 * @property string $companytype
 * @property string $url
 * @property string $companyaddress
 * @property string $companykeywords
 * @property integer $realcert
 * @property string $realtime
 * @property string $lastdone1
 * @property string $lastdonetime1
 * @property string $usertel
 * @property integer $persons1
 * @property integer $friends1
 * @property integer $hits
 * @property string $idnum
 * @property string $ref_username
 * @property string $ref_userid
 * @property integer $tmoney
 * @property string $keywords
 * @property integer $totalref1
 * @property string $comments0
 * @property integer $comments1
 * @property integer $basicqx
 * @property integer $photoqx
 * @property integer $contactqx
 * @property integer $messageqx
 * @property string $topuserphototime
 * @property integer $mobilevote
 * @property string $introdate1
 * @property integer $getgifts
 * @property integer $supportuser
 * @property integer $chatqx1
 * @property integer $cert
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password', 'required'),
			//array('usersex, userlogins, lockuser1, userphoto, userphotos, hits, tmoney, basicqx, photoqx, contactqx, messageqx, mobilevote, getgifts, supportuser, chatqx1, cert', 'numerical', 'integerOnly'=>true),
			//array('password, username, userbirthday, userquesion, useranswer, oicq,  useraddress,  mobile, realname, education, occupation, workcity, workstreetnumber, workcountry, lookingfor, shengxiao, constellation, bloodtype, bodytype, residenceprov, residencecity, homeresidence, folk, believe, school, employment, jobtitle, marry, house, salary, country, wine, smoking, specialist, duty, joblookingfor, loverlookings, firstlove, lives, likest, dislikes, virtues, shortcomings, songs, colors, stars, idealities, unforgetable, admiring, bodylike, companytype, lastdone1, idnum, ref_username, 'length', 'max'=>50),
			array('useremail, workprovince, character, intro', 'length', 'max'=>255),
			array('userlastip', 'length', 'max'=>30),
			array('homepage, ref_userid, comments0', 'length', 'max'=>250),
			array('workdistrict, worktown, workstreet, workbuilding, homeprovince, homecity, advantage, companyname, url, keywords', 'length', 'max'=>100),
			//array('languages, activities, sports, movies, musics, tasts, liketogoes, potations, datingplaces, companyaddress', 'length', 'max'=>200),
			array('joindate, lastlogin, workexperience, introdate, companykeywords, realtime, lastdonetime1, topuserphototime, introdate1', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userid, password, username, useremail, usersex, joindate, lastlogin, userlogins, lockuser1, userbirthday, userquesion, useranswer, userlastip, userphoto, userphotos, oicq, icq, msn, homepage, useraddress, zipcode, mobile, mobiletel, upgrade, realname, bodyheight, bodyweight, education, occupation, workprovince, workcity, workdistrict, worktown, workstreet, workstreetnumber, workbuilding, workcountry, lookingfor, shengxiao, constellation, bloodtype, bodytype, residenceprov, residencecity, homeresidence, homeprovince, homecity, folk, believe, school, employment, jobtitle, marry, house, salary, country, wine, smoking, character, specialist, duty, advantage, joblookingfor, workexperience, intro, introdate, languages, activities, sports, movies, musics, tasts, liketogoes, potations, datingplaces, loverlookings, firstlove, lives, likest, dislikes, virtues, shortcomings, songs, colors, stars, idealities, unforgetable, admiring, bodylike, companyname, companytel, companytype, url, companyaddress, companykeywords, realcert, realtime, lastdone1, lastdonetime1, usertel, persons1, friends1, hits, idnum, ref_username, ref_userid, tmoney, keywords, totalref1, comments0, comments1, basicqx, photoqx, contactqx, messageqx, topuserphototime, mobilevote, introdate1, getgifts, supportuser, chatqx1, cert, msg, msgdate', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			"user_tousu"=>array(self::HAS_MANY,'DvTousu','receiveid'),
			"storeuser"=>array(self::HAS_MANY,'StoreUser','userid')
		);
	}

	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password,$type)
	{
		if($type == 0) $password = $this->hashPassword($password);
		$res = strstr($password,$this->password);
		return $res;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password)
	{
		return md5($password);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userid' => 'Userid',
			'password' => 'Password',
			'username' => 'Username',
			'useremail' => 'Useremail',
			'usersex' => 'Usersex',
			'joindate' => 'Joindate',
			'lastlogin' => 'Lastlogin',
			'userlogins' => 'Userlogins',
			'lockuser1' => 'Lockuser1',
			'userbirthday' => 'Userbirthday',
			'userquesion' => 'Userquesion',
			'useranswer' => 'Useranswer',
			'userlastip' => 'Userlastip',
			'userphoto' => 'Userphoto',
			'userphotos' => 'Userphotos',
			'oicq' => 'Oicq',
			'useraddress' => 'Useraddress',
			'mobile' => 'Mobile',
			'realname' => 'Realname',
			'education' => 'Education',
			'occupation' => 'Occupation',
			'workprovince' => 'Workprovince',
			'workcity' => 'Workcity',
			'workdistrict' => 'Workdistrict',
			'worktown' => 'Worktown',
			'workstreet' => 'Workstreet',
			'workstreetnumber' => 'Workstreetnumber',
			'workbuilding' => 'Workbuilding',
			'workcountry' => 'Workcountry',
			'lookingfor' => 'Lookingfor',
			'shengxiao' => 'Shengxiao',
			'constellation' => 'Constellation',
			'bloodtype' => 'Bloodtype',
			'residencecity' => 'Residencecity',
			'homeresidence' => 'Homeresidence',
			'homeprovince' => 'Homeprovince',
			'homecity' => 'Homecity',
			'believe' => 'Believe',
			'school' => 'School',
			'employment' => 'Employment',
			'jobtitle' => 'Jobtitle',
			'marry' => 'Marry',
			'house' => 'House',
			'salary' => 'Salary',
			'country' => 'Country',
			'wine' => 'Wine',
			'smoking' => 'Smoking',
			'character' => 'Character',
			'specialist' => 'Specialist',
			'duty' => 'Duty',
			'advantage' => 'Advantage',
			'joblookingfor' => 'Joblookingfor',
			'workexperience' => 'Workexperience',
			'intro' => 'Intro',
			'introdate' => 'Introdate',
			'activities' => 'Activities',
			'sports' => 'Sports',
			'movies' => 'Movies',
			'musics' => 'Musics',
			'tasts' => 'Tasts',
			'liketogoes' => 'Liketogoes',
			'potations' => 'Potations',
			'datingplaces' => 'Datingplaces',
			'loverlookings' => 'Loverlookings',
			'firstlove' => 'Firstlove',
			'lives' => 'Lives',
			'likest' => 'Likest',
			'dislikes' => 'Dislikes',
			'virtues' => 'Virtues',
			'shortcomings' => 'Shortcomings',
			'songs' => 'Songs',
			'colors' => 'Colors',
			'stars' => 'Stars',
			'idealities' => 'Idealities',
			'unforgetable' => 'Unforgetable',
			'admiring' => 'Admiring',
			'bodylike' => 'Bodylike',
			'companyname' => 'Companyname',
			'companytel' => 'Companytel',
			'companytype' => 'Companytype',
			'url' => 'Url',
			'companyaddress' => 'Companyaddress',
			'companykeywords' => 'Companykeywords',
			'realcert' => 'Realcert',
			'realtime' => 'Realtime',
			'lastdone1' => 'Lastdone1',
			'lastdonetime1' => 'Lastdonetime1',
			'usertel' => 'Usertel',
			'persons1' => 'Persons1',
			'friends1' => 'Friends1',
			'hits' => 'Hits',
			'idnum' => 'Idnum',
			'ref_username' => 'Ref_username',
			'ref_userid' => 'ref_userid',
			'tmoney' => 'Tmoney',
			'keywords' => 'Keywords',
			'totalref1' => 'Totalref1',
			'comments0' => 'Comments0',
			'comments1' => 'Comments1',
			'basicqx' => 'Basicqx',
			'photoqx' => 'Photoqx',
			'contactqx' => 'Contactqx',
			'messageqx' => 'Messageqx',
			'topuserphototime' => 'Topuserphototime',
			'mobilevote' => 'Mobilevote',
			'introdate1' => 'Introdate1',
			'getgifts' => 'Getgifts',
			'supportuser' => 'Supportuser',
			'chatqx1' => 'Chatqx1',
			'cert' => 'Cert',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('userid',$this->userid,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('useremail',$this->useremail,true);
		$criteria->compare('usersex',$this->usersex);
		$criteria->compare('joindate',$this->joindate,true);
		$criteria->compare('lastlogin',$this->lastlogin,true);
		$criteria->compare('userlogins',$this->userlogins);
		$criteria->compare('lockuser1',$this->lockuser1);
		$criteria->compare('userbirthday',$this->userbirthday,true);
		$criteria->compare('userquesion',$this->userquesion,true);
		$criteria->compare('useranswer',$this->useranswer,true);
		$criteria->compare('userlastip',$this->userlastip,true);
		$criteria->compare('userphoto',$this->userphoto);
		$criteria->compare('userphotos',$this->userphotos);
		$criteria->compare('oicq',$this->oicq,true);
		$criteria->compare('icq',$this->icq,true);
		$criteria->compare('msn',$this->msn,true);
		$criteria->compare('homepage',$this->homepage,true);
		$criteria->compare('useraddress',$this->useraddress,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('workprovince',$this->workprovince,true);
		$criteria->compare('workcity',$this->workcity,true);
		$criteria->compare('workdistrict',$this->workdistrict,true);
		$criteria->compare('worktown',$this->worktown,true);
		$criteria->compare('workstreet',$this->workstreet,true);
		$criteria->compare('workstreetnumber',$this->workstreetnumber,true);
		$criteria->compare('workbuilding',$this->workbuilding,true);
		$criteria->compare('workcountry',$this->workcountry,true);
		$criteria->compare('lookingfor',$this->lookingfor,true);
		$criteria->compare('shengxiao',$this->shengxiao,true);
		$criteria->compare('constellation',$this->constellation,true);
		$criteria->compare('bloodtype',$this->bloodtype,true);
		$criteria->compare('bodytype',$this->bodytype,true);
		$criteria->compare('residenceprov',$this->residenceprov,true);
		$criteria->compare('residencecity',$this->residencecity,true);
		$criteria->compare('homeresidence',$this->homeresidence,true);
		$criteria->compare('homeprovince',$this->homeprovince,true);
		$criteria->compare('homecity',$this->homecity,true);
		$criteria->compare('folk',$this->folk,true);
		$criteria->compare('believe',$this->believe,true);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('employment',$this->employment,true);
		$criteria->compare('jobtitle',$this->jobtitle,true);
		$criteria->compare('marry',$this->marry,true);
		$criteria->compare('house',$this->house,true);
		$criteria->compare('salary',$this->salary,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('wine',$this->wine,true);
		$criteria->compare('smoking',$this->smoking,true);
		$criteria->compare('character',$this->character,true);
		$criteria->compare('specialist',$this->specialist,true);
		$criteria->compare('duty',$this->duty,true);
		$criteria->compare('advantage',$this->advantage,true);
		$criteria->compare('joblookingfor',$this->joblookingfor,true);
		$criteria->compare('workexperience',$this->workexperience,true);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('introdate',$this->introdate,true);
		$criteria->compare('activities',$this->activities,true);
		$criteria->compare('sports',$this->sports,true);
		$criteria->compare('movies',$this->movies,true);
		$criteria->compare('musics',$this->musics,true);
		$criteria->compare('tasts',$this->tasts,true);
		$criteria->compare('liketogoes',$this->liketogoes,true);
		$criteria->compare('potations',$this->potations,true);
		$criteria->compare('datingplaces',$this->datingplaces,true);
		$criteria->compare('loverlookings',$this->loverlookings,true);
		$criteria->compare('firstlove',$this->firstlove,true);
		$criteria->compare('lives',$this->lives,true);
		$criteria->compare('likest',$this->likest,true);
		$criteria->compare('dislikes',$this->dislikes,true);
		$criteria->compare('virtues',$this->virtues,true);
		$criteria->compare('shortcomings',$this->shortcomings,true);
		$criteria->compare('songs',$this->songs,true);
		$criteria->compare('colors',$this->colors,true);
		$criteria->compare('stars',$this->stars,true);
		$criteria->compare('idealities',$this->idealities,true);
		$criteria->compare('unforgetable',$this->unforgetable,true);
		$criteria->compare('admiring',$this->admiring,true);
		$criteria->compare('bodylike',$this->bodylike,true);
		$criteria->compare('companyname',$this->companyname,true);
		$criteria->compare('companytel',$this->companytel,true);
		$criteria->compare('companytype',$this->companytype,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('companyaddress',$this->companyaddress,true);
		$criteria->compare('companykeywords',$this->companykeywords,true);
		$criteria->compare('realcert',$this->realcert);
		$criteria->compare('realtime',$this->realtime,true);
		$criteria->compare('lastdone1',$this->lastdone1,true);
		$criteria->compare('lastdonetime1',$this->lastdonetime1,true);
		$criteria->compare('usertel',$this->usertel,true);
		$criteria->compare('persons1',$this->persons1);
		$criteria->compare('friends1',$this->friends1);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('idnum',$this->idnum,true);
		$criteria->compare('ref_username',$this->ref_username,true);
		$criteria->compare('ref_userid',$this->ref_userid,true);
		$criteria->compare('tmoney',$this->tmoney);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('totalref1',$this->totalref1);
		$criteria->compare('comments0',$this->comments0,true);
		$criteria->compare('comments1',$this->comments1);
		$criteria->compare('basicqx',$this->basicqx);
		$criteria->compare('photoqx',$this->photoqx);
		$criteria->compare('contactqx',$this->contactqx);
		$criteria->compare('messageqx',$this->messageqx);
		$criteria->compare('topuserphototime',$this->topuserphototime,true);
		$criteria->compare('mobilevote',$this->mobilevote);
		$criteria->compare('introdate1',$this->introdate1,true);
		$criteria->compare('getgifts',$this->getgifts);
		$criteria->compare('supportuser',$this->supportuser);
		$criteria->compare('chatqx1',$this->chatqx1);
		$criteria->compare('cert',$this->cert);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
