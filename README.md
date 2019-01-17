# Discord Webhook Form
A simple php script for alerting users about a form submission via a discord webhook, the main focus is ease of use, requiring hardly any back-end setup.
Requires curl to be enabled inorder to post via webhook.

## Setup
### Setup with Template.
- Upload all the files onto your webserver.
- Enter your details into config.php.
- Change the form html tags in index.php.

### Setup with Custom Form.
- Upload config.php & discord-post.php into your webserver.
- Enter your details into config.php.
- Have your form posting to discord-post.php.

```
Custom Example
<form method="post" action="discord-post.php">
  <textarea name="message" placeholder="Message" required></textarea>
  <button type="submit">send</button>
</form>
```

### Formatting
- name="" is used as the input title in the discord message, it is auto capitalised.
- value="" is entered below the title.

## Notes
- Form returns back with ever index.php?r=success or index.php?r=error.
- No backend form verification, users could add new form inputs. That shouldn't really matter because they will just be posted with the message and nothing malicious could be done.

## Preview
### Discord Message
![discord message preview](https://i.imgur.com/gHNTJaQ.png)

### Form Template
![form template](https://i.imgur.com/4wAuUku.png)
## Demo
Submit a form entry on our demo site [here](https://districtnine.host/dev/demos/discord-form).

All submission on the demo website are posted into this [discord server](https://discord.gg/wCy5Eht).
