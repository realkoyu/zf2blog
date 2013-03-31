<?php
/**
 * Created by Victor
 * User: 俞
 * Date: 13-3-31
 * Time: 下午8:57
 */

namespace Entity\Blog;

/**
 * @Entity @Table(name="Blog")
 */
class Blog extends BaseEntity{

    /**
     * @Column(type="string")
     */
    protected $title;
    /**
     * @Column(type="string")
     */
    protected $content;
    /**
     * @Column(type="datetime")
     */
    protected $created_at;
    /**
     * @Column(type="string")
     */
    protected $keywords;
}