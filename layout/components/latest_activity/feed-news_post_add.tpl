{username profile_id=$feed->actor_id assign=user}
{text %feeds.news_post_add user=$user href=$feed->tpl_vars.href title=$feed->tpl_vars.title|out_format|censor:'blog':true description=$feed->tpl_vars.text|out_format|censor:'blog'}