<?php
/**
 * Created by Victor
 * User: 俞
 * Date: 13-3-31
 * Time: 下午9:36
 */

namespace Entity\Blog;


class BaseEntity {
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;
}