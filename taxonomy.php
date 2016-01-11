<?php

// Bulk create Drupal 7 taxonomy vocabularies

function _create_vocabs() {

  $new_vocabs = array(
    'vocab_machine_name_1' => 'Human readable name 1',
    'vocab_machine_name_2' => 'Human readable name 2',
    'vocab_machine_name_3' => 'Human readable name 3',
    );

  foreach ($new_vocabs as $vocab_name => $name) {
    if(!taxonomy_vocabulary_machine_name_load($vocab_name)){
        $vocab = new stdClass();
        $vocab->name = $name;
        $vocab->machine_name = $vocab_name;
        taxonomy_vocabulary_save($vocab);
      } //if
    } //foreach
} //_create_vocabs
