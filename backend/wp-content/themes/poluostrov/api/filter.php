<?

$filter_type = $_GET['type'];
$hashtag_id_list = $_GET['id_list'];
$hashtag_all_id_list = $_GET['all_id_list'];

// фильтр компаний
if($filter_type === 'company') {

    $companies = get_posts( array(
        'post_type'   => 'cutaway',
    ));

    $companies_result = array();

    foreach($companies as $company) {
        $company_hashtags = CFS()->get('company_hashtags', $company -> ID);
        $company_locations = CFS()->get('company_locations', $company -> ID); 

        foreach($company_hashtags as $company_hashtag_id) {
            foreach($hashtag_all_id_list as $hashtag_all_id) {
                if($company_hashtag_id == $hashtag_all_id) { // на этом этапе остались те компании, которые подходят под глобальные хэштеги страницы (теризм, маст гоу, есть жить)
                    
                    foreach($company_hashtags as $company_hashtag_id_all) { // фильтр подходящих компаний на все хэштеги
                        foreach ($hashtag_id_list as $hashtag_id) {
                            if($company_hashtag_id_all == $hashtag_id) {
                                $company_locations = CFS()->get('company_locations', $company -> ID);
                                $company_locations_formed = array();
            
                                if ($company_locations) {
                                    foreach($company_locations as $location_id) {
            
                                        $company_location_formed = array(
                                            'title' => get_post($location_id) -> post_title,
                                            'link' => get_permalink($location_id),
                                        );
            
                                        $company_locations_formed[] = $company_location_formed;
                                    }
                                }

                                
                                if($hashtag_all_id == '138') { //если "есть"
                                    $company_eatlive = 'eat';
                                }

                                if($hashtag_all_id == '139') { //если "жить"
                                    $company_eatlive = 'live';
                                }
            

                                $companies_formed = array(
                                    'id' => $company -> ID, 
                                    'link' => get_permalink($company -> ID),
                                    'title' => $company -> post_title,
                                    'desc' => get_field('company_desc', $company -> ID),
                                    'locations' => $company_locations_formed,
                                    'image' => get_the_post_thumbnail_url($company -> ID),
                                    'eatlive' => $company_eatlive
                                );

                                if (! in_array($companies_formed, $companies_result)) {
                                 $companies_result[] =  $companies_formed;
                                }
                            }
                        }
                    }

                    foreach ($company_locations as $company_location_id) { 
                        foreach($hashtag_id_list as $hashtag_id) {
                            if($hashtag_id == $company_location_id) {

                                foreach($company_hashtags as $company_hashtag_id_all) { // фильтр подходящих компаний на все хэштеги
                                    foreach ($hashtag_all_id_list as $hashtag_all_id) {
                                        if($company_hashtag_id_all == $hashtag_all_id) {

                                            $company_locations = CFS()->get('company_locations', $company -> ID);
                                            $company_locations_formed = array();
                                            $company_eatlive = null;
                        
                                            if ($company_locations) {
                                                foreach($company_locations as $location_id) {
                        
                                                    $company_location_formed = array(
                                                        'title' => get_post($location_id) -> post_title,
                                                        'link' => get_permalink($location_id),
                                                    );
                        
                                                    $company_locations_formed[] = $company_location_formed;
                                                }
                                            }

                                            if($hashtag_all_id == '138') { //если "есть"
                                                $company_eatlive = 'eat';
                                            }
            
                                            if($hashtag_all_id == '139') { //если "жить"
                                                $company_eatlive = 'live';
                                            }
                        
            
                                            $companies_formed = array(
                                                'id' => $company -> ID, 
                                                'link' => get_permalink($company -> ID),
                                                'title' => $company -> post_title,
                                                'desc' => get_field('company_desc', $company -> ID),
                                                'locations' => $company_locations_formed,
                                                'image' => get_the_post_thumbnail_url($company -> ID),
                                                'eatlive' => $company_eatlive
                                            );

                                            if (! in_array($companies_formed, $companies_result)) {
                                                $companies_result[] =  $companies_formed;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }

                }
            }

        }
    }

    if(empty($companies_result)) {
        echo json_encode(array(
            'success' => false,
            'error' => 'Нет компаний удовлетворяющих условиям'
        ));
    } else {
        echo json_encode(array(
            'success' => true,
            'data' => $companies_result
        ));  
    }
}

// фильтр статей
else if($filter_type === 'articles') {

    $articles = get_posts( array(
        'post_type'   => 'articles',
    ));

    $articles_result = array();

    foreach($articles as $article) {
        $article_hashtags = CFS()->get('article_hashtags', $article -> ID);
        $article_locations = CFS()->get('article_location', $article -> ID);

        foreach($article_hashtags as $article_hashtags_id) {
            foreach($hashtag_all_id_list as $hashtag_all_id) {
                if($article_hashtags_id == $hashtag_all_id) { // на этом этапе остались те компании, которые подходят под глобальные хэштеги страницы (теризм, маст гоу, есть жить)
                    
                    foreach($article_hashtags as $article_hashtags_id_all) { // фильтр подходящих компаний на все хэштеги
                        foreach ($hashtag_id_list as $hashtag_id) {
                            if($article_hashtags_id_all == $hashtag_id) {

                                // формируем ответ
                                $article_locations = CFS()->get('article_location', $article -> ID);
                                $article_locations_formed = array();
            
                                if ($article_locations) {
                                    foreach($article_locations as $location_id) {
            
                                        $article_location_formed = array(
                                            'title' => get_post($location_id) -> post_title,
                                            'link' => get_permalink($location_id),
                                        );
            
                                        $article_locations_formed[] = $article_location_formed;
                                    }
                                }
            
                                $article_authors = CFS()->get('article_author', $article -> ID);
                                $article_authors_formed = array();
                                
                                if ($article_authors) {
                                    foreach ($article_authors as $author_id) {
                                        $author = get_post($author_id);
            
                                        $article_author_formed = array(
                                            'name' => $author -> post_title,
                                            'link' => get_permalink($author_id)
                                        );
            
                                        $article_authors_formed[] = $article_author_formed;
                                    }
                                }
            
                                $article_photographers = CFS()->get('article_photographer', $article -> ID);
                                $article_photographers_formed = array();
                                
                                if ($article_photographers) {
                                    foreach ($article_photographers as $author_id) {
                                        $author = get_post($author_id);
            
                                        $article_photographer_formed = array(
                                            'name' => $author -> post_title,
                                            'link' => get_permalink($author_id)
                                        );
            
                                        $article_photographers_formed[] = $article_photographer_formed;
                                    }
                                }
            
                                $article_formed = array(
                                    'id' => $article -> ID, 
                                    'link' => get_permalink($article -> ID),
                                    'title' => $article -> post_title,
                                    'locations' => $article_location_formed,
                                    'image' => get_field('articles_img', $article -> ID),
                                    'authors' => $article_authors_formed,
                                    'photographers' => $article_photographers_formed,
                                    'desc' => get_field('articles_digest_desc', $article -> ID)
                                );
                                if (! in_array($article_formed, $articles_result)) {
                                    $articles_result[] = $article_formed;
                                }                                 
                            }
                        }
                    }

                    foreach ($article_locations as $article_location_id) { 
                        foreach($hashtag_id_list as $hashtag_id) {
                            if($hashtag_id == $article_location_id) {
                                // формируем ответ
                                $article_locations = CFS()->get('article_location', $article -> ID);
                                $article_locations_formed = array();
            
                                if ($article_locations) {
                                    foreach($article_locations as $location_id) {
            
                                        $article_location_formed = array(
                                            'title' => get_post($location_id) -> post_title,
                                            'link' => get_permalink($location_id),
                                        );
            
                                        $article_locations_formed[] = $article_location_formed;
                                    }
                                }
            
                                $article_authors = CFS()->get('article_author', $article -> ID);
                                $article_authors_formed = array();
                                
                                if ($article_authors) {
                                    foreach ($article_authors as $author_id) {
                                        $author = get_post($author_id);
            
                                        $article_author_formed = array(
                                            'name' => $author -> post_title,
                                            'link' => get_permalink($author_id)
                                        );
            
                                        $article_authors_formed[] = $article_author_formed;
                                    }
                                }
            
                                $article_photographers = CFS()->get('article_photographer', $article -> ID);
                                $article_photographers_formed = array();
                                
                                if ($article_photographers) {
                                    foreach ($article_photographers as $author_id) {
                                        $author = get_post($author_id);
            
                                        $article_photographer_formed = array(
                                            'name' => $author -> post_title,
                                            'link' => get_permalink($author_id)
                                        );
            
                                        $article_photographers_formed[] = $article_photographer_formed;
                                    }
                                }
            
                                $article_formed = array(
                                    'id' => $article -> ID, 
                                    'link' => get_permalink($article -> ID),
                                    'title' => $article -> post_title,
                                    'locations' => $article_location_formed,
                                    'image' => get_field('articles_img', $article -> ID),
                                    'authors' => $article_authors_formed,
                                    'photographers' => $article_photographers_formed,
                                    'desc' => get_field('articles_digest_desc', $article -> ID)
                                );
                                if (! in_array($article_formed, $articles_result)) {
                                    $articles_result[] = $article_formed;
                                }
                            }
                        }
                    }

                }
            }

        }
    }

    if(empty($articles_result)) {
        echo json_encode(array(
            'success' => false,
            'error' => 'Нет компаний удовлетворяющих условиям'
        ));
    } else {
        echo json_encode(array(
            'success' => true,
            'data' => $articles_result
        ));  
    }
}

?>