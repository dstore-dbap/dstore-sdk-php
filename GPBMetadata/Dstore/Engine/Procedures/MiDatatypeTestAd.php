<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_DatatypeTest_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class MiDatatypeTestAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad31c0a316473746f72652f656e67696e652f70726f636564757265732f" .
            "6d695f4461746174797065546573745f41642e70726f746f12206473746f" .
            "72652e656e67696e652e6d695f4461746174797065546573745f41641a13" .
            "6473746f72652f76616c7565732e70726f746f1a1a6473746f72652f656e" .
            "67696e652f656e67696e652e70726f746f2282080a0a506172616d657465" .
            "727312360a117365745f6f75747075745f706172616d7318012001280b32" .
            "1b2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565121f" .
            "0a167365745f6f75747075745f706172616d735f6e756c6c18e907200128" .
            "0812330a0e6765745f726573756c745f73657418022001280b321b2e6473" .
            "746f72652e76616c7565732e426f6f6c65616e56616c7565121c0a136765" .
            "745f726573756c745f7365745f6e756c6c18ea0720012808122d0a087465" .
            "73745f62697418032001280b321b2e6473746f72652e76616c7565732e42" .
            "6f6f6c65616e56616c756512160a0d746573745f6269745f6e756c6c18eb" .
            "0720012808122d0a09746573745f6368617218042001280b321a2e647374" .
            "6f72652e76616c7565732e537472696e6756616c756512170a0e74657374" .
            "5f636861725f6e756c6c18ec072001280812340a0d746573745f64617465" .
            "74696d6518052001280b321d2e6473746f72652e76616c7565732e54696d" .
            "657374616d7056616c7565121b0a12746573745f6461746574696d655f6e" .
            "756c6c18ed072001280812310a0c746573745f646563696d616c18062001" .
            "280b321b2e6473746f72652e76616c7565732e446563696d616c56616c75" .
            "65121a0a11746573745f646563696d616c5f6e756c6c18ee072001280812" .
            "2d0a0a746573745f696d61676518072001280b32192e6473746f72652e76" .
            "616c7565732e427974657356616c756512180a0f746573745f696d616765" .
            "5f6e756c6c18ef072001280812310a0c746573745f696e74656765721808" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c7565121a0a11746573745f696e74656765725f6e756c6c18f007200128" .
            "08122f0a0a746573745f6d6f6e657918092001280b321b2e6473746f7265" .
            "2e76616c7565732e446563696d616c56616c756512180a0f746573745f6d" .
            "6f6e65795f6e756c6c18f1072001280812320a0d746573745f736d616c6c" .
            "696e74180a2001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c7565121b0a12746573745f736d616c6c696e745f6e756c6c" .
            "18f20720012808122d0a09746573745f74657874180b2001280b321a2e64" .
            "73746f72652e76616c7565732e537472696e6756616c756512170a0e7465" .
            "73745f746578745f6e756c6c18f3072001280812310a0c746573745f7469" .
            "6e79696e74180c2001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565121a0a11746573745f74696e79696e745f6e756c" .
            "6c18f4072001280812300a0c746573745f76617263686172180d2001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c7565121a" .
            "0a11746573745f766172636861725f6e756c6c18f5072001280822e8120a" .
            "08526573706f6e736512380a106d6574615f696e666f726d6174696f6e18" .
            "022003280b321e2e6473746f72652e656e67696e652e4d657461496e666f" .
            "726d6174696f6e12270a076d65737361676518032003280b32162e647374" .
            "6f72652e656e67696e652e4d657373616765123b0a03726f771804200328" .
            "0b322e2e6473746f72652e656e67696e652e6d695f446174617479706554" .
            "6573745f41642e526573706f6e73652e526f77122d0a08746573745f6269" .
            "7418652001280b321b2e6473746f72652e76616c7565732e426f6f6c6561" .
            "6e56616c7565122d0a09746573745f6368617218662001280b321a2e6473" .
            "746f72652e76616c7565732e537472696e6756616c756512340a0d746573" .
            "745f6461746574696d6518672001280b321d2e6473746f72652e76616c75" .
            "65732e54696d657374616d7056616c756512310a0c746573745f64656369" .
            "6d616c18682001280b321b2e6473746f72652e76616c7565732e44656369" .
            "6d616c56616c7565122d0a0a746573745f696d61676518692001280b3219" .
            "2e6473746f72652e76616c7565732e427974657356616c756512310a0c74" .
            "6573745f696e7465676572186a2001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c7565122f0a0a746573745f6d6f6e6579" .
            "186b2001280b321b2e6473746f72652e76616c7565732e446563696d616c" .
            "56616c756512320a0d746573745f736d616c6c696e74186c2001280b321b" .
            "2e6473746f72652e76616c7565732e496e746567657256616c7565122d0a" .
            "09746573745f74657874186d2001280b321a2e6473746f72652e76616c75" .
            "65732e537472696e6756616c756512310a0c746573745f74696e79696e74" .
            "186e2001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c756512300a0c746573745f76617263686172186f2001280b321a2e" .
            "6473746f72652e76616c7565732e537472696e6756616c75651a990d0a03" .
            "526f77120f0a06726f775f696418904e20012805122e0a09746573745f74" .
            "65787418914e2001280b321a2e6473746f72652e76616c7565732e537472" .
            "696e6756616c7565123d0a18746573745f646563696d616c5f706172616d" .
            "5f696e70757418924e2001280b321a2e6473746f72652e76616c7565732e" .
            "537472696e6756616c756512350a0d746573745f6461746574696d651893" .
            "4e2001280b321d2e6473746f72652e76616c7565732e54696d657374616d" .
            "7056616c756512470a21746573745f746578745f706172616d5f696e7075" .
            "745f627974655f6c656e67746818944e2001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c7565123a0a15746573745f7465" .
            "78745f706172616d5f696e70757418954e2001280b321a2e6473746f7265" .
            "2e76616c7565732e537472696e6756616c756512320a0c746573745f6465" .
            "63696d616c18964e2001280b321b2e6473746f72652e76616c7565732e44" .
            "6563696d616c56616c7565123e0a19746573745f736d616c6c696e745f70" .
            "6172616d5f696e70757418974e2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c7565122e0a09746573745f636861721898" .
            "4e2001280b321a2e6473746f72652e76616c7565732e537472696e675661" .
            "6c7565123d0a18746573745f74696e79696e745f706172616d5f696e7075" .
            "7418994e2001280b321a2e6473746f72652e76616c7565732e537472696e" .
            "6756616c7565122e0a08746573745f626974189a4e2001280b321b2e6473" .
            "746f72652e76616c7565732e426f6f6c65616e56616c756512320a0c7465" .
            "73745f696e7465676572189b4e2001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c756512320a0c746573745f74696e7969" .
            "6e74189c4e2001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c7565123b0a16746573745f6d6f6e65795f706172616d5f69" .
            "6e707574189d4e2001280b321a2e6473746f72652e76616c7565732e5374" .
            "72696e6756616c756512480a22746573745f696d6167655f706172616d5f" .
            "696e7075745f627974655f6c656e677468189e4e2001280b321b2e647374" .
            "6f72652e76616c7565732e496e746567657256616c7565123f0a1a746573" .
            "745f746578745f706172616d5f696e7075745f6d5f6435189f4e2001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c7565123a" .
            "0a15746573745f636861725f706172616d5f696e70757418a04e2001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c75651233" .
            "0a0d746573745f736d616c6c696e7418a14e2001280b321b2e6473746f72" .
            "652e76616c7565732e496e746567657256616c756512390a14746573745f" .
            "6269745f706172616d5f696e70757418a24e2001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c7565122e0a0a746573745f69" .
            "6d61676518a34e2001280b32192e6473746f72652e76616c7565732e4279" .
            "74657356616c7565122e0a0b746573745f626967696e7418a44e2001280b" .
            "32182e6473746f72652e76616c7565732e4c6f6e6756616c756512400a1b" .
            "746573745f696d6167655f706172616d5f696e7075745f6d5f643518a54e" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "7565123d0a18746573745f696e74656765725f706172616d5f696e707574" .
            "18a64e2001280b321a2e6473746f72652e76616c7565732e537472696e67" .
            "56616c756512310a0c746573745f7379736e616d6518a74e2001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c7565123d0a18" .
            "746573745f766172636861725f706172616d5f696e70757418a84e200128" .
            "0b321a2e6473746f72652e76616c7565732e537472696e6756616c756512" .
            "3e0a19746573745f6461746574696d655f706172616d5f696e70757418a9" .
            "4e2001280b321a2e6473746f72652e76616c7565732e537472696e675661" .
            "6c7565123b0a16746573745f696d6167655f706172616d5f696e70757418" .
            "aa4e2001280b321a2e6473746f72652e76616c7565732e537472696e6756" .
            "616c756512300a0a746573745f6d6f6e657918ab4e2001280b321b2e6473" .
            "746f72652e76616c7565732e446563696d616c56616c756512310a0c7465" .
            "73745f7661726368617218ac4e2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c756512320a0c746573745f6e756d657269" .
            "6318ad4e2001280b321b2e6473746f72652e76616c7565732e446563696d" .
            "616c56616c756542530a1b696f2e6473746f72652e656e67696e652e7072" .
            "6f636564757265735a34676f73646b2e6473746f72652e64652f656e6769" .
            "6e652f70726f636564757265732f6d695f4461746174797065546573745f" .
            "4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

