<?php
namespace phptutorial;

function getPlatform(string $userAgent): string
{
    if (preg_match('/linux/i', $userAgent)) {
        return 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
        return 'mac';
    } elseif (preg_match('/windows|win32/i', $userAgent)) {
        return 'windows';
    } else {
        return 'Unknown';
    }
}

function getNameOfUserAgent(string $userAgent): array
{
    if (preg_match('/MSIE/i', $userAgent) && !preg_match('/Opera/i', $userAgent)) {
        return array("MSIE", "Internet Explorer");
    } elseif (preg_match('/Firefox/i', $userAgent)) {
        return array("Firefox", "Mozilla Firefox");
    } elseif (preg_match('/Chrome/i', $userAgent)) {
        return array("Chrome", "Goolge Chrome");
    } elseif (preg_match('/Safari/i', $userAgent)) {
        return array("Safari", "Apple Safari");
    } elseif (preg_match('/Opera/i', $userAgent)) {
        return array("Opera", "Opera");
    } elseif (preg_match('/Netscape/i', $userAgent)) {
        return array("Netscape", "Netscape");
    } else {
        // FIXME: What should I return this case as 'ub'?
        return array("", "Unknown");
    }
}

function getBrowserVersion(string $userAgent, string $ub): string
{
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $userAgent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        // We will have two since we are not using 'other' argument yet.
        // see if version is before or after the name.
        if (strripos($userAgent, "Version") < strripos($userAgent, $ub)) {
            $version = $matches['version'][0];
        } else {
            $version = $matches['version'][1];
        }
    } else {
        $version = $matches['version'][0];
    }

    // Can't find Browser Version.
    if ($version === null || $version === "") {
        return "?";
    } else {
        return $version;
    }
}

function getBrowser(): array
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $version = "";

    // First get the platform?
    $platform = getPlatform($u_agent);

    // Next get the name of the useragent yes seperately and for good reason
    list($ub, $bname) = getNameOfUserAgent($u_agent);

    // finally get the correct version number
    $version = getBrowserVersion($u_agent, $ub);

    return array(
        'userAgent' => $u_agent,
        'name' => $bname,
        'version' => $version,
        'platform' => $platform,
    );
}
