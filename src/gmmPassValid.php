<?php

namespace gmm27c\gmmPassValid\widgets;

class PasswordInput extends InputWidget
{

    public function run()
    {
        return $this->render('gmmPassValid', [
            'content' => $this->content()
        ]);
    }

    protected function rules()
    {
        $rules = null;
		return $rules;
    }

    protected function content()
    {
        return '';
    }
}
