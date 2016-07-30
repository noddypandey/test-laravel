<?php

namespace app;

class Department extends \Baum\Node
{
    protected $table = 'departments';

    protected $fillable = ['name', 'display_name'];
          // 'parent_id' column name
  protected $parentColumn = 'parent_id';

  // 'lft' column name
  protected $leftColumn = 'lft';

  // 'rgt' column name
  protected $rightColumn = 'rgt';

  // 'depth' column name
  protected $depthColumn = 'depth';

  // guard attributes from mass-assignment
  protected $guarded = array('id', 'parent_id', 'lft', 'rgt', 'depth');

    public function users()
    {
        return $this->belongsToMany('app\User', 'department_user');
    }
}
