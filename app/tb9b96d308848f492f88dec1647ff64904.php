<?php

// =============================================
// Autor                Alexander Eliseo Olivieri
// Creado               martes, 22 de agosto de 2023 09:28:58
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.6
// =============================================

namespace App;

/**
 * Recuperar Categoria - Recuperar Categoria.
 */
class tb9b96d308848f492f88dec1647ff64904 extends \Eloquent
{
    protected $appends = ['fl6fc3d349c6264991929008579122a438', 'flab6def4d71cf4082a6eb8a10b861ad02'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl6fc3d349c6264991929008579122a438Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_CATEGORIA - PK_CATEGORIA */
    public function getFlab6def4d71cf4082a6eb8a10b861ad02Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
