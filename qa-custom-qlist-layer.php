<?php

class qa_html_theme_layer extends qa_html_theme_base
{
	const TITLE_MAX_LENGTH = 60;

	public function q_list_and_form($q_list)
	{
		if (isset($q_list['qs'])) {
			foreach ($q_list['qs'] as $index => $field) {
				$len = mb_strlen($field['title'], 'UTF-8');
				if ($len <= self::TITLE_MAX_LENGTH) {
					continue;
				}
				$q_list['qs'][$index]['title'] = mb_substr($field['title'], 0, self::TITLE_MAX_LENGTH - 1, 'UTF-8') . '…';
			}
		}
		qa_html_theme_base::q_list_and_form($q_list);
	}

}
