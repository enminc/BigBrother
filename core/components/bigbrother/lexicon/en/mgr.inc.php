<?php
/**
 * MGR English Lexicon Entries for Big Brother
 *
 * @package bigbrother
 * @subpackage lexicon
 */
$_lang['bigbrother.main_title'] = 'Google Analytics';

/* Alert */
$_lang['bigbrother.alert_failed'] = 'Failed';

/* Action buttons - modAB */
$_lang['bigbrother.revoke_authorization'] = 'Revoke authorization';
$_lang['bigbrother.revoke_permission'] = 'Revoke permission ?';
$_lang['bigbrother.revoke_permission_msg'] = "By revoking permission, you'll have to go through the setup process again to authorize MODx to use Google Analytics's APIs. <br/> Are you sure you want to revoke permissions ?";

/* Authenticate */
$_lang['bigbrother.bd_root_desc'] = 'Verifying if SimpleXML and cURL PHP extensions are activated before proceeding to the login screen';
$_lang['bigbrother.bd_root_crumb_text'] = 'Verify Prerequisite';

$_lang['bigbrother.verify_prerequisite_settings'] = 'Verify Prerequisite Settings';
$_lang['bigbrother.start_the_login_process'] = 'Start the login process';
$_lang['bigbrother.callback_label'] = 'Callback URL';
$_lang['bigbrother.callback_label_under'] = 'If the URL specified in this field does not match to the page where you are, copy and paste the current URL in the field.';

/* Oauth complete */
$_lang['bigbrother.bd_oauth_complete_in_progress'] = 'Authentification in progress...';
$_lang['bigbrother.bd_oauth_authorize'] = 'Authorize';
$_lang['bigbrother.oauth_select_account'] = 'Select an account...';
$_lang['bigbrother.oauth_btn_select_account'] = 'Select this account and view the report';

/* Oauth response */
$_lang['bigbrother.err_load_oauth'] = 'Could not load the required OAuth class. Please reinstall the component or contact the webmaster.';

/* mgr - breadcrumbs */
$_lang['bigbrother.bd_authorize'] = 'Authorize';
$_lang['bigbrother.bd_choose_an_account'] = 'Choose an Account';

/* mgr - Authenticate Ajax response strings */
$_lang['bigbrother.class_simplexml'] = '<strong>It appears that <a href="http://us3.php.net/manual/en/book.simplexml.php">SimpleXML</a> is not compiled into your version of PHP.<br/> It is required for this plugin to function correctly.</strong>';
$_lang['bigbrother.function_curl'] = '<strong>It appears that <a href="http://www.php.net/manual/en/book.curl.php">cURL</a> is not compiled into your version of PHP.<br/> It is required for this plugin to function correctly.</strong>';
$_lang['bigbrother.redirect_to_google'] = 'Redirect to Google, please wait...';
$_lang['bigbrother.authentification_complete'] = 'Authentification complete.</p><p>Select the account you wish to use by default in the list below.<br/> At any time, you will be able to select another account in the dashboard.';
$_lang['bigbrother.account_set_succesfully_wait'] = 'Account set successfully! Please wait...';

/* Reports */
$_lang['bigbrother.desc_markup'] = '<h3>{title}<span>{date_begin} - {date_end}</span></h3><div class="account-infos">{name}<span>{id}</span></div>';
$_lang['bigbrother.loading'] = 'Loading...';

/* Content Overview */

$_lang['bigbrother.content'] = 'Content';
$_lang['bigbrother.content_overview'] = 'Content Overview';
$_lang['bigbrother.site_content'] = 'Site Content';
$_lang['bigbrother.visits_comparisons'] = 'Visits compared to the previous month';

/* Audience Overview */
$_lang['bigbrother.audience'] = 'Audience';
$_lang['bigbrother.audience_overview'] = 'Audience Overview';
$_lang['bigbrother.audience_visits'] = 'Visits';

$_lang['bigbrother.demographics'] = 'Demographics';
$_lang['bigbrother.language'] = 'Language';
$_lang['bigbrother.country'] = 'Country / Territory';

$_lang['bigbrother.system'] = 'System';
$_lang['bigbrother.browser'] = 'Browser';
$_lang['bigbrother.operating_system'] = 'Operating System';
$_lang['bigbrother.service_provider'] = 'Service Provider';

$_lang['bigbrother.mobile'] = 'Mobile';
$_lang['bigbrother.screen_resolution'] = 'Screen Resolution';

/* Traffic sources Overview */
$_lang['bigbrother.traffic_sources'] = 'Traffic Sources';
$_lang['bigbrother.traffic_sources_overview'] = 'Traffic Sources Overview';
$_lang['bigbrother.traffic_sources_visits'] = 'Visits';

$_lang['bigbrother.organic_source'] = 'Search Engines';
$_lang['bigbrother.keyword'] = 'Search Engines Keyword';
$_lang['bigbrother.referral_source'] = 'Referring Sites';
$_lang['bigbrother.landing_page'] = 'Landing Page';

/* Misc - Dimensions */
$_lang['bigbrother.none'] = '(none)';
$_lang['bigbrother.direct_traffic'] = 'Direct Traffic';

$_lang['bigbrother.search_traffic'] = 'organic';
$_lang['bigbrother.referral_traffic'] = 'referral';

$_lang['bigbrother.search_traffic_replace_with'] = 'Search Engines';
$_lang['bigbrother.referral_traffic_replace_with'] = 'Referring Sites';

/* Misc - Metrics */
$_lang['bigbrother.visits_and_uniques'] = 'Visits and Uniques';
$_lang['bigbrother.avg_time_on_site'] = 'Avg. Time on Site';
$_lang['bigbrother.page'] = 'Page';
$_lang['bigbrother.pagetitle'] = 'Page Title';
$_lang['bigbrother.pageviews'] = 'Pageviews';
$_lang['bigbrother.pageviews_per_visit'] = 'Pages / Visit';
$_lang['bigbrother.unique_pageviews'] = 'Unique Pageviews';
$_lang['bigbrother.bounce_rate'] = 'Bounce Rate';
$_lang['bigbrother.visits'] = 'Visits';
$_lang['bigbrother.visitors'] = 'Visitors';
$_lang['bigbrother.percent_visits'] = '% Visits';
$_lang['bigbrother.exit_rate'] = '% Exit';
$_lang['bigbrother.new_visits'] = 'New Visits';
$_lang['bigbrother.new_visits_in_percent'] = '% New Visits';
$_lang['bigbrother.direct_traffic'] = 'Direct Traffic';
$_lang['bigbrother.search_engines'] = 'Search Engines';

/* Options panel */
$_lang['bigbrother.options'] = 'Options';
$_lang['bigbrother.save_settings'] = 'Save Settings';
$_lang['bigbrother.general_options'] = 'General Options';
$_lang['bigbrother.dashboard_options'] = 'Dashboard Options';

/* Options panel - cmp options */
$_lang['bigbrother.accounts_list'] = 'Accounts List';
$_lang['bigbrother.accounts_list_desc'] = 'Select the account you want to use for your report';

$_lang['bigbrother.date_range'] = 'Date Range';
$_lang['bigbrother.date_range_desc'] = 'Select the date range for your reports';

$_lang['bigbrother.15_days'] = '15 days';
$_lang['bigbrother.30_days'] = '30 days';
$_lang['bigbrother.45_days'] = '45 days';
$_lang['bigbrother.60_days'] = '60 days';

$_lang['bigbrother.report_end_date'] = 'Report End Date';
$_lang['bigbrother.report_end_date_desc'] = 'Select the date to which the reports should stop';

$_lang['bigbrother.caching_time'] = 'Caching Time';
$_lang['bigbrother.caching_time_desc'] = 'How long should report results should be saved in cache (in seconds)';

$_lang['bigbrother.admin_groups'] = 'Administrator Groups';
$_lang['bigbrother.admin_groups_desc'] = 'Comma separated list of Administrator Group Names who have access to the current options panel';

/* Options panel - dashboard options */
$_lang['bigbrother.show_visits_on_dashboard'] = 'Visits';
$_lang['bigbrother.show_visits_on_dashboard_desc'] = 'Show visits on the dashboard';

$_lang['bigbrother.show_metas_on_dashboard'] = 'Informations';
$_lang['bigbrother.show_metas_on_dashboard_desc'] = 'Show meta informations on the dashboard';

$_lang['bigbrother.show_pies_on_dashboard'] = 'Visitors and Traffic sources';
$_lang['bigbrother.show_pies_on_dashboard_desc'] = 'Show Visitors and Traffic Sources pie charts on the dashboard';