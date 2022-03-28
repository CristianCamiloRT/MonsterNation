<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Routines Model
 *
 * @property \App\Model\Table\ExercisesTable&\Cake\ORM\Association\BelongsToMany $Exercises
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Routine newEmptyEntity()
 * @method \App\Model\Entity\Routine newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Routine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Routine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Routine findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Routine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Routine[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Routine|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Routine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Routine[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Routine[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Routine[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Routine[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoutinesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('routines');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Exercises', [
            'foreignKey' => 'routine_id',
            'targetForeignKey' => 'exercise_id',
            'joinTable' => 'routines_exercises',
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'routine_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_routines',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('routine')
            ->maxLength('routine', 250)
            ->requirePresence('routine', 'create')
            ->notEmptyString('routine');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
