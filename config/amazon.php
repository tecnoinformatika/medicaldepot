<?php

return [

	/**
	 * Your access key.
	 */
	'access_key' => env('AMAZON_ACCESS_KEY', 'AKIAJ7GZHYMYNJTDMK2A'),

	/**
	 * Your secret key.
	 */
	'secret_key' => env('AMAZON_SECRET_KEY', 'kVJVj/L9ACyUuP5uSl7ZNcYkZhT/AntJ8bnTJwS9'),

	/**
	 * Your affiliate associate tag.
	 */
	'associate_tag' => env('AMAZON_ASSOCIATE_TAG', 'columbussoft-20'),

	/**
	 * Preferred locale
	 */
	'locale' => env('AMAZON_LOCALE', 'com'),

	/**
	 * Preferred response group
	 */
	'response_group' => env('AMAZON_RESPONSE_GROUP', 'Images,ItemAttributes'),

        /**
         * Preferred search index
         */
	'search_index' => env('AMAZON_SEARCH_INDEX', 'All'),


];
