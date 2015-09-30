<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'Relation' instanceof Think\Model\RelationModel,
			'Adv' instanceof Think\Model\AdvModel,
			'View' instanceof Think\Model\ViewModel,
			'Mongo' instanceof Think\Model\MongoModel,
		],
	];
}